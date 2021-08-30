<?php
namespace App\Repositories;

use App\Models\Notice;
use App\Repositories\Interfaces\NoticeRepositoryInterface;
use App\Http\Resources\NoticeResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class NoticeRepository extends BaseRepository implements NoticeRepositoryInterface
{
    private $with = [
        'userType:id,name', 'attachment:id,name,extension,path', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname',
        'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Notice $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'user_type_id', 'notice_msg', 'notice_details', 'from_date', 'to_date', 'attachment_id', 'is_active')
            ->with(['userType:id,name', 'attachment:id,name,extension,path'])
            ->orderBy('notice_msg', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'notices.notice_msg',
            'notices.from_date',
            'notices.to_date',
            'notices.is_active',
            'user_types.name'
        ];

        $likeQueryKeys = [
            'user_types.name'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if($value != '') {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $this->model->count();
        $data['recordsFiltered'] = $this->model->where($filterConditions)->count();

        $data['data'] = DB::table('notices')
            ->select('notices.id', 'user_types.name as user_type', 'notices.notice_msg',
                DB::raw(
                    'DATE_FORMAT(notices.from_date, "%d/%m/%Y") AS from_date, 
                    DATE_FORMAT(notices.to_date, "%d/%m/%Y") AS to_date'
                ),
                'notices.is_active')
            ->leftJoin('user_types', 'notices.user_type_id', '=', 'user_types.id')
            ->whereNull('notices.deleted_at')
            ->where($filterConditions)
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false)
    {
        try {
            $notice = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new NoticeResource($notice) : $notice;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function create(array $data)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $data) {

            if (isset($data['attachments']['notice'])) {
                $attachmentRepository->setPath(config('app_constants.path.notice'));
                $file = [
                    'file' => $data['attachments']['notice']
                ];

                $data['attachment_id'] = $attachmentRepository->create($file);
                unset($data['attachments']);
            }

            return parent::create($data);
        });
    }

    public function update(array $data, $id)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $data, $id) {
            $notice = $this->getDetails($id);

            if(isset($data['attachments']['notice'])) {
                $attachmentRepository->setPath(config('app_constants.path.notice'));
                $file = [
                    'file' => $data['attachments']['notice']
                ];
                $data['attachment_id'] = $attachmentRepository->update($file, $notice->attachment_id);
            }

            unset($data['attachments']);

            return parent::update($data, $id);
        });
    }

    public function getActiveNotices() {
        $now = now()->format('Y-m-d');

        $searchKey = request()->query('search');
        $page = request()->query('page', 1);
        $perPageResult = 10;

        $from = ($page - 1) * $perPageResult;
        $to = $from + $perPageResult;

        $total = $this->model
            ->select('id')
            ->where([
                'user_type_id' => auth()->user()->user_type_id,
                'is_active' => 1
            ])
            ->where(function($query) use ($now) {
                $query
                    ->where(function($query) {
                        $query->whereNull(['from_date', 'to_date']);
                    })
                    ->orWhere(function($query) use ($now){
                        $query
                            ->where([
                                ['from_date', '<=', $now],
                                ['to_date', '>=', $now]
                            ]);
                    })
                ;
            })
            ->when($searchKey, function($query) use ($searchKey) {
                $query->where('notice_msg', 'LIKE', '%' . $searchKey . '%');
            })
            ->count();

        $totalPages = intval(ceil($total / $perPageResult));

        $paginationInfo = [
            'total' => $total,
            'first_page_link' => $page > 1 ?
                (
                    isset($searchKey) ?
                        url()->current() . '?page=1&search=' . urlencode($searchKey) : url()->current() . '?page=1'
                ) : null,
            'last_page_link' => $page < $totalPages ?
                (
                    isset($searchKey) ?
                        url()->current() . '?page=' . $totalPages . '&search=' . urlencode($searchKey) : url()->current() . '?page=' . $totalPages
                ) : null,
            'previous_page_link' => $page > 1 ?
                (
                    isset($searchKey) ?
                        url()->current() . '?page=' . ($page - 1) . '&search=' . urlencode($searchKey) : url()->current() . '?page=' . ($page - 1)
                ) : null,
            'next_page_link' => $page < $totalPages ?
                (
                    isset($searchKey) ?
                        url()->current() . '?page=' . ($page + 1) . '&search=' . urlencode($searchKey) : url()->current() . '?page=' . ($page + 1)
                ) : null
        ];

        $result = $this->model
            ->with(['userType:id,name', 'attachment:id,name,extension,path'])
            ->select('id', 'notice_msg', 'notice_details', 'from_date', 'to_date', 'remarks', 'user_type_id', 'attachment_id'
            , 'doc_no', 'doc_issue_date')
            ->where([
                'user_type_id' => auth()->user()->user_type_id,
                'is_active' => 1
            ])
            ->where(function($query) use ($now) {
                $query
                    ->where(function($query) {
                        $query->whereNull(['from_date', 'to_date']);
                    })
                    ->orWhere(function($query) use ($now){
                        $query
                            ->where([
                                ['from_date', '<=', $now],
                                ['to_date', '>=', $now]
                            ]);
                    })
                ;
            })
            ->when($searchKey, function($query) use ($searchKey) {
                $query->where('notice_msg', 'LIKE', '%' . $searchKey . '%');
            })
            ->orderBy('id','DESC')
            ->skip($from)
            ->take($to)
            ->get();

        return [
            'data' => $result,
            'pagination_info' => $paginationInfo
        ];
    }

}
