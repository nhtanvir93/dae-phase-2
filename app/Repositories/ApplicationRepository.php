<?php

namespace App\Repositories;

use App\Models\Application;
use App\Http\Resources\ApplicationResource;
use App\Repositories\Interfaces\ApplicationRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Events\AppPaymentCompleted;
use Carbon\Carbon;

class ApplicationRepository extends BaseRepository implements ApplicationRepositoryInterface
{
    private $with = [
        'appType:id,name', 'applicant:id,user_id,fullname,present_address_id,signature_attachment_id', 'applicant.user:id,mobile,email',
        'applicant.presentAddress:id,description', 'organization:id,name,custom_house', 'applicant.signatureAttachment:id,name,extension,path',
        'appHoldingUser:id,user_id,fullname', 'appHolder:id,designation_id', 'appHolder.designation:id,title', 'appProducts', 'appAttachments', 'appAttachments.attachment:id,name,extension,path',
        'appAttachments.configAttachment:id,name','appProducts.product:id,name,botanical_name,certificate_validity_days',
        'appProducts.productType:id,name,unit_id', 'appProducts.productType.unit:id,name',
        'appProducts.photoAttachment:id,name,extension,path', 'appProducts.entryOrganization',
        'parentApplication', 'details', 'payments.transaction', 'payments.transaction.echallan', 'payments.invoice', 'payments.invoice.bankBranch:id,name,bank_id', 'payments.invoice.bankBranch.bank:id,name', 'attachmentAttributes',
        'attachmentAttributes.configAttachment:id,name', 'attachmentAttributes.configAttachmentAttribute:id,name',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname', 'approvedUser:id,user_id,fullname,signature_attachment_id', 'approvedUser.signatureAttachment:id,name,path,extension', 'rejectedUser:id,user_id,fullname'
    ];

    public function __construct(Application $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'app_type_id', 'applicant_id', 'organization_id', 'app_holding_user_id', 'current_status', 'total_fee',
                'paid_payment', 'is_paid', 'is_approved', 'is_cancelled', 'last_comment',
                'app_date', 'payment_date')
            ->with(['appType:id,name', 'applicant:id,user_id,fullname', 'organization:id,name',
                'appHoldingUser:id,user_id,fullname',
                'appProducts:application_id,product_id,product_name', 'appProducts.product:id,name'])
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $authUser = auth()->user();
        $userTypeLabel = $userRepository->getUserTypeLabel($authUser->id);

        $columns = [
            'applications.id',
            'applicants.fullname',
            'app_types.name',
            'dae_users.fullname',
            'organizations.name',
            'applications.app_date',
            'applications.current_status',
            'applications.payment_date',
            'applications.is_paid'
        ];

        $likeQueryKeys = [];

        $zeroExcludedKeys = [
            'applications.id',
            'applications.app_type_id',
            'applications.applicant_id',
            'applications.organization_id',
            'applications.app_holding_user_id'
        ];

        $whereConditions = [
            'is_approved' => 0,
            'is_cancelled' => 0
        ];

        $notInAppStatuses = [
            'APPROVED', 'REJECTED', 'CANCELLED'
        ];

        $userId = auth()->user()->id;

        $selectFields = 'applications.id, app_types.short_name as app_type_short_name, app_types.name as app_type_name, applicants.fullname as applicant, 
                organizations.name as organization, dae_users.fullname as dae_user, applications.current_status, 
                DATE_FORMAT(applications.app_date, "%d-%m-%Y") as app_date, applications.applicant_id as applicant_id, applications.cnf_user_id as cnf_user_id,
                DATE_FORMAT(applications.payment_date, "%d-%m-%Y") as payment_date, applications.is_paid, ro_details.memo_id';

        if($userTypeLabel == 'APPLICANT') {
            $whereConditions = [
                'applications.applicant_id' => $userId
            ];

            $notInAppStatuses = [];
        } elseif ($userTypeLabel == 'DAE_USER') {
            $notInAppStatuses[] = 'RECHECKED';

            $whereConditions['applications.app_holding_user_id'] = $userId;
            $whereConditions['applications.organization_id'] = isset($authUser->organization_id) ? $authUser->organization_id : 0;
        } elseif ($userTypeLabel == 'CNF') {
            $whereConditions = [
                'applications.cnf_user_id' => $userId
            ];

            $notInAppStatuses = [];
        } elseif ($userTypeLabel == 'DAE_ADMIN') {
            $selectFields = 'applications.id, app_types.short_name as app_type_short_name, app_types.name as app_type_name, applicants.fullname as applicant, 
                organizations.name as organization, dae_users.fullname as dae_user, applications.current_status, 
                DATE_FORMAT(applications.app_date, "%d-%m-%Y") as app_date,  applications.applicant_id as applicant_id, applications.cnf_user_id as cnf_user_id,
                DATE_FORMAT(applications.payment_date, "%d-%m-%Y") as payment_date, applications.is_paid, ro_details.memo_id, app_holding_users.username as app_holding_username';

            $notInAppStatuses = [];

            $whereConditions = [
                'applications.organization_id' => isset($authUser->organization_id) ? $authUser->organization_id : 0
            ];
        } elseif ($userTypeLabel == 'SYSTEM_ADMIN') {
            $selectFields = 'applications.id, app_types.short_name as app_type_short_name, app_types.name as app_type_name, applicants.fullname as applicant, 
                organizations.name as organization, dae_users.fullname as dae_user, applications.current_status, 
                DATE_FORMAT(applications.app_date, "%d-%m-%Y") as app_date,  applications.applicant_id as applicant_id, applications.cnf_user_id as cnf_user_id,
                DATE_FORMAT(applications.payment_date, "%d-%m-%Y") as payment_date, applications.is_paid, ro_details.memo_id, app_holding_users.username as app_holding_username';

            $whereConditions = $notInAppStatuses = [];
        } else {
            $whereConditions['application_id'] = 0;
        }

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
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
        $queryFiltered = DB::table('applications')
            ->leftJoin('app_types','applications.app_type_id','=','app_types.id')
            ->leftJoin('profiles as applicants','applications.applicant_id','=','applicants.user_id')
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('profiles as dae_users','applications.app_holding_user_id','=','dae_users.user_id')
            ->leftJoin('ro_details','applications.id','=','ro_details.application_id')
            ->leftJoin('users as app_holding_users','applications.app_holding_user_id','=','app_holding_users.id')
            ->selectRaw($selectFields)
            ->whereNull('applications.deleted_at')
            ->when(count($notInAppStatuses) > 0, function($query) use ($notInAppStatuses) {
                return $query->whereNotIn('current_status', $notInAppStatuses);
            })
            ->where(array_merge($filterConditions, $whereConditions));
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetailsOnly($id) {
        try {
            return $this->model->with(['details'])->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }

    public function getDetails($id, $with = false) {
        try {
            $application = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ApplicationResource($application) : $application;
    }

    public function getUserApprovedIpApplications($userId, $ipApplicationIds = []) {
        $roIpApplicationRepository = resolve('App\Repositories\Interfaces\RoIpApplicationRepositoryInterface');

        $includedIpApplicationIds = count($ipApplicationIds) == 0 ? request()->get('application_ids') : $ipApplicationIds;

        if($includedIpApplicationIds instanceof Collection) {
            $includedIpApplicationIds = $includedIpApplicationIds->toArray();
        }

        $includedIpApplicationIds = $roIpApplicationRepository->getIpApplicationIdForRo($includedIpApplicationIds);

        $with = [
            'appProducts:id,application_id,product_id,product_name,botanical_name,product_type_id,quantity',
            'appProducts.product:id,name,botanical_name', 'appProducts.productType:id,name,unit_id',
            'appProducts.productType.unit:id,name', 'details'
        ];

        return $this->model
            ->with($with)
            ->whereIn('id', $includedIpApplicationIds)
            ->where(function($query) use ($userId){
                $query
                    ->where('applicant_id', $userId)
                    ->orWhereHas('cnfAssignments', function($query) use ($userId) {
                        $query
                            ->where([
                                'cnf_user_id' => $userId,
                                'is_locked' => 0
                            ]);
                    });
            })
            ->where([
                'app_type_id' => config('app_constants.app_types.IP'),
                'is_approved' => 1
            ])->get();
    }

    public function getAvailableProductsInfo($userId, $withDetails = false, $excludedRoApplicationIds = [],
                                             $includedIpApplicationIds = []) {
        if(count($includedIpApplicationIds) > 0) {
            $approvedIpApplications = $this->getUserApprovedIpApplications($userId, $includedIpApplicationIds);
        } else {
            $includedIpApplicationIds = request()->get('application_ids')->toArray();
            $approvedIpApplications = $this->getUserApprovedIpApplications($userId);
        }

        $excludedRoApplicationIds = count($excludedRoApplicationIds) > 0 ?
            $excludedRoApplicationIds : request()->get('excluded_ro_application_ids', []);

        $ipAppDetails = [
            'ip_applications' => [],
            'product_types' => [],
            'products' => []
        ];

        if($approvedIpApplications->count() == 0) {
            return $ipAppDetails;
        }

        $ipApplicationIds = [];

        foreach($approvedIpApplications as $approvedIpApplication) {
            $approvedIpApplication = $approvedIpApplication->toArray();

            $ipApplicationId = $approvedIpApplication['id'];
            $ipApplicationIds[] = $ipApplicationId;
            $ipAppProducts = $approvedIpApplication['app_products'];

            unset($approvedIpApplication['app_products']);

            $ipAppDetails['ip_applications'][$ipApplicationId] = [
                'id' => $ipApplicationId,
                'application' => $approvedIpApplication,
                'ip_app_products' => $ipAppProducts,
                'ro_applications' => []
            ];

            $data = $this->setProductAndProductTypes($ipAppProducts, $ipAppDetails['products'],
                $ipAppDetails['product_types'], $approvedIpApplication['id']);
            $ipAppDetails['products'] =  $data['products'];
            $ipAppDetails['product_types'] =  $data['product_types'];
        }

        $roIpApplications = $this->getApplicationInfoForRo($userId, $excludedRoApplicationIds, $ipApplicationIds)->toArray();

        if(count($roIpApplications) == 0) {
            if(!$withDetails && array_key_exists('ip_applications', $ipAppDetails)) {
                unset($ipAppDetails['ip_applications']);
            }

            return $this->removeExcludedIpAppDetails($ipAppDetails, $includedIpApplicationIds);
        }

        foreach($roIpApplications as $roIpApplication) {
            $ipApplicationIds = array_column($roIpApplication['ip_applications'], 'ip_application_id');

            foreach($ipApplicationIds as $ipApplicationId) {
                $usedRoApplications = isset($ipAppDetails['ip_applications'][$ipApplicationId]) ?
                    $ipAppDetails['ip_applications'][$ipApplicationId]['ro_applications'] : [];
                if(
                    isset($roIpIpplication['app_products'])
                    && !in_array($roIpIpplication['id'], $usedRoApplications)
                    && $this->isValidProducts($ipAppDetails['products'], $roIpIpplication['app_products'])
                ) {
                    $ipAppDetails['ip_applications'][$roIpIpplication['ip_application_id']]['ro_applications'][] = $roIpIpplication['id'];
                    $ipAppDetails = $this->setAvailableProducts($ipAppDetails, $roIpIpplication['app_products'], $roIpApplication['id']);
                }
            }

            $ipAppDetails = $this->setAvailableProducts($ipAppDetails, $roIpApplication['app_products'], $roIpApplication['id']);
        }

        if(!$withDetails && array_key_exists('ip_applications', $ipAppDetails)) {
            unset($ipAppDetails['ip_applications']);
        }

        return $this->removeExcludedIpAppDetails($ipAppDetails, $includedIpApplicationIds);
    }

    private function removeExcludedIpAppDetails($ipAppDetails, $includedIpApplicationIds) {
        $ipAppDetails = $this->removeExcludedIpProduct($ipAppDetails, $includedIpApplicationIds);
        $ipAppDetails = $this->removeExcludedIpProductType($ipAppDetails, $includedIpApplicationIds);

        foreach($ipAppDetails['ip_applications'] as $id => $ipApplication) {
            if(!in_array($id, $includedIpApplicationIds)) {
                unset($ipAppDetails['ip_applications'][$id]);
            }
        }

        return $ipAppDetails;
    }

    private function removeExcludedIpProductType($ipAppDetails, $includedIpApplicationIds) {
        $productTypes = $ipAppDetails['product_types'];

        foreach($productTypes as $key => $productType) {
            $usedIpApplicationIds = $productType['used_ip_application_ids'];

            if(count($usedIpApplicationIds) == 1 && !in_array($usedIpApplicationIds[0], $includedIpApplicationIds)) {
                unset($ipAppDetails['product_types'][$key]);
                continue;
            }
        }

        $ipAppDetails['product_types'] = array_values($ipAppDetails['product_types']);

        return $ipAppDetails;
    }

    private function removeExcludedIpProduct($ipAppDetails, $includedIpApplicationIds) {
        $ipAppProducts = $ipAppDetails['products'];

        foreach($ipAppProducts as $key => $ipAppProduct) {
            $usedIpApplicationIds = $ipAppProduct['used_ip_application_ids'];
            $newProductId = $ipAppProduct['id'];

            if(count($usedIpApplicationIds) == 1 && !in_array($usedIpApplicationIds[0], $includedIpApplicationIds)) {
                unset($ipAppDetails['products'][$key]);
                continue;
            }

            if(isset($ipAppProduct['product_quantity_mapping'])) {
                foreach($usedIpApplicationIds as $usedIpApplicationId) {
                    if(!in_array($usedIpApplicationId, $includedIpApplicationIds)) {
                        $appProducts = $ipAppDetails['ip_applications'][$usedIpApplicationId]['ip_app_products'];
                        $appProductkey1 = array_search($newProductId, array_column($appProducts,'product_id'));
                        $appProductkey2 = array_search($newProductId, array_column($appProducts,'product_name'));

                        if(($appProductkey1 >= 0 || $appProductkey2 >= 0)) {
                            $totalQuantity = $ipAppDetails['ip_applications'][$usedIpApplicationId]['ip_app_products'][$appProductkey1]['quantity'];
                            $usedQuantity = $ipAppProduct['product_quantity_mapping'][$usedIpApplicationId]['used_quantity'];

                            $totalGrossQuantity = $ipAppDetails['products'][$key]['total_quantity'] -= $totalQuantity;
                            $usedGrossQuantity = $ipAppDetails['products'][$key]['used_quantity'] -= $usedQuantity;
                            $ipAppDetails['products'][$key]['available_quantity'] = $totalGrossQuantity - $usedGrossQuantity;
                        }

                    }
                }
            }
        }

        $ipAppDetails['products'] = array_values($ipAppDetails['products']);

        return $ipAppDetails;
    }

    private function isValidProducts($products, $roProducts) {
        foreach($roProducts as $roProduct) {
            $roProductId = $roProduct['product_id'] > 0 ? $roProduct['product_id'] : $roProduct['product_name'];
            if(!in_array($roProductId, array_column($products, 'id'))) {
                return false;
            }
        }

        return true;
    }

    private function setProductQuantityMapping($newProductId, $key, $roAppProductQuantity, $ipAppProducts, $ipAppDetails, $ipApplicationIds) {
        $ipProductQuantityArray = [];
        foreach($ipApplicationIds as $ipApplicationId) {
            $appProducts = $ipAppDetails['ip_applications'][$ipApplicationId]['ip_app_products'];
            $appProductkey1 = array_search($newProductId, array_column($appProducts,'product_id'));
            $appProductkey2 = array_search($newProductId, array_column($appProducts,'product_name'));

            $ipProductQuantity = 0;
            $quantity = $ipAppDetails['ip_applications'][$ipApplicationId]['ip_app_products'][$appProductkey1]['quantity'];

            if(isset($ipAppProducts[$key]['product_quantity_mapping'])
                && array_key_exists($ipApplicationId, $ipAppProducts[$key]['product_quantity_mapping'])) {
                $oldUsedQuantity = $ipAppProducts[$key]['product_quantity_mapping'][$ipApplicationId]['used_quantity'];
                $quantity -= $oldUsedQuantity;
            }

            if(($appProductkey1 >= 0 || $appProductkey2 >= 0)) {
                if($roAppProductQuantity <= $quantity) {
                    $ipProductQuantity = $roAppProductQuantity;
                }elseif($roAppProductQuantity > $quantity) {
                    $ipProductQuantity = $quantity;
                }
            }

            if($ipProductQuantity > 0) {
                $ipProductQuantityArray[$ipApplicationId] = $ipProductQuantity;
            }
        }

        if(count($ipProductQuantityArray) > 0) {
            $minIpProductQuantity = min($ipProductQuantityArray);
            $minQuantityIpApplicationId = array_search($minIpProductQuantity, $ipProductQuantityArray);

            $roAppProductQuantity = $roAppProductQuantity - $minIpProductQuantity;

            if(isset($ipAppProducts[$key]['product_quantity_mapping'])
                && array_key_exists($minQuantityIpApplicationId, $ipAppProducts[$key]['product_quantity_mapping'])) {
                $oldUsedQuantity = $ipAppProducts[$key]['product_quantity_mapping'][$minQuantityIpApplicationId]['used_quantity'];
                $ipAppProducts[$key]['product_quantity_mapping'][$minQuantityIpApplicationId] = [
                    'used_quantity' => $minIpProductQuantity + $oldUsedQuantity
                ];
            } else {
                $ipAppProducts[$key]['product_quantity_mapping'][$minQuantityIpApplicationId] = [
                    'used_quantity' => $minIpProductQuantity
                ];
            }
        } else {
            return $ipAppProducts;
        }

        return $roAppProductQuantity == 0 ?
            $ipAppProducts : $this->setProductQuantityMapping($newProductId, $key, $roAppProductQuantity, $ipAppProducts, $ipAppDetails, $ipApplicationIds);
    }

    private function setAvailableProducts($ipAppDetails, $roAppProducts, $roApplicationId) {
        $ipAppProducts = $ipAppDetails['products'];
        foreach($roAppProducts as $appProduct) {
            $newProductId = $appProduct['product_id'] > 0 ? $appProduct['product_id'] : $appProduct['product_name'];
            $key = array_search($newProductId, array_column($ipAppProducts,'id'));

            if($key >= 0) {
                $ipAppProducts[$key]['ro_used_quantity'][] = [
                    'product_id' => $newProductId,
                    'ro_application_id' => $roApplicationId,
                    'quantity' => $appProduct['quantity']
                ];

                $totalQuantity = $ipAppProducts[$key]['total_quantity'];
                $usedQuantity = array_sum(array_column($ipAppProducts[$key]['ro_used_quantity'],'quantity'));
                $availableQuantity = $totalQuantity - $usedQuantity;
                $ipAppProducts[$key]['used_quantity'] = $usedQuantity;
                $ipAppProducts[$key]['available_quantity'] = $availableQuantity < 1 ? 0 : $availableQuantity;

                $ipApplicationIds = $ipAppProducts[$key]['used_ip_application_ids'];
                $ipAppProducts = $this->setProductQuantityMapping($newProductId, $key, $appProduct['quantity'], $ipAppProducts,
                    $ipAppDetails, $ipApplicationIds);
            }
        }

        $ipAppDetails['products'] = $ipAppProducts;
        return $ipAppDetails;
    }

    private function setProductAndProductTypes($products, $oldProducts, $oldProductTypes, $ipApplicationId) {
        foreach($products as $product) {
            $newProductId = $product['product_id'] > 0 ? $product['product_id'] : $product['product_name'];
            $newProductName = isset($product['product']['name']) ? $product['product']['name'] : $product['product_name'];
            $newProductBotanicalName = isset($product['product']['botanical_name']) ? $product['product']['botanical_name'] : $product['botanical_name'];

            $newProductTypeId = $product['product_type_id'];
            $newProductTypeName = isset($product['product_type']['name']) ? $product['product_type']['name'] : 'N/A';
            $unit = isset($product['product_type']['unit']['name']) ? $product['product_type']['unit']['name'] : 'N/A';

            $key = array_search($newProductId, array_column($oldProducts,'id'));

            if($key === false) {
                $oldProducts[] = [
                    'id' => $newProductId,
                    'product_type_id' => $newProductTypeId,
                    'name' => $newProductName,
                    'botanical_name' => $newProductBotanicalName,
                    'total_quantity' => $product['quantity'],
                    'used_quantity' => 0,
                    'available_quantity' => $product['quantity'],
                    'used_ip_application_ids' => [$ipApplicationId]
                ];
            } elseif(!in_array($ipApplicationId, $oldProducts[$key]['used_ip_application_ids'])) {
                $oldProducts[$key]['total_quantity'] += $product['quantity'];
                $oldProducts[$key]['available_quantity'] += $product['quantity'];
                $oldProducts[$key]['used_ip_application_ids'][] = $ipApplicationId;
            }

            if(!in_array($newProductTypeId, array_column($oldProductTypes,'id'))) {
                $oldProductTypes[] = [
                    'id' => $newProductTypeId,
                    'name' => $newProductTypeName,
                    'unit' => $unit,
                    'used_ip_application_ids' => [$ipApplicationId]
                ];
            } else {
                $key = array_search($newProductTypeId, array_column($oldProductTypes,'id'));
                if(!in_array($ipApplicationId, $oldProductTypes[$key]['used_ip_application_ids'])) {
                    $oldProductTypes[$key]['used_ip_application_ids'][] = $ipApplicationId;
                }
            }
        }

        return [
            'products' => $oldProducts,
            'product_types' => $oldProductTypes
        ];
    }

    public function getApplicationIds($certificateNos, $appTypeId = null, $applyLocked = false, $checkValidity = false) {
        $appTypeId = empty($appTypeId) ? config('app_constants.app_types.IP') : $appTypeId;

        if(!$certificateNos) {
            return collect([]);
        }

        return $this->model->where([
                'app_type_id' => $appTypeId
            ])
            ->when($applyLocked, function($query) {
                return $query->where('is_locked',0);
            })
            ->when($checkValidity, function($query) {
                return $query
                    ->whereNotNull('certificate_validity_date')
                    ->where('certificate_validity_date', '>=', now()->format('Y-m-d'));
            })
            ->whereIn('certificate_no', $certificateNos)
            ->pluck('id');
    }

    public function getApplicationDetails($certificateNos, $appTypeId = null, $applyLocked = false) {
        $appTypeId = empty($appTypeId) ? config('app_constants.app_types.IP') : $appTypeId;

        if(!$certificateNos) {
            return collect([]);
        }

        return $this->model->where([
                'app_type_id' => $appTypeId
            ])
            ->when($applyLocked, function($query) {
                return $query->where('is_locked',0);
            })
            ->whereIn('certificate_no', $certificateNos)
            ->get();
    }

    public function getApplicationInfoForRo($userId, $excludedRoApplicationIds, $includedIpApplicationIds) {
        $with = [
            'ipApplications:id,ro_application_id,ip_application_id',
            'ipApplications.roApplication:id,app_type_id,organization_id,applicant_id,is_cancelled',
            'appProducts:id,application_id,product_id,product_name,botanical_name,product_type_id,quantity',
            'appProducts.product:id,name,botanical_name', 'appProducts.productType:id,name,unit_id',
            'appProducts.productType.unit:id,name'
        ];

        if(count($includedIpApplicationIds) > 0) {
            return $this->model
                ->with($with)
                ->select('id', 'organization_id', 'app_type_id', 'applicant_id', 'is_cancelled')
                ->where([
                    'app_type_id' => config('app_constants.app_types.RO'),
                    'is_cancelled' => 0
                ])
                ->whereNotIn('id', $excludedRoApplicationIds)
                ->whereHas('ipApplications', function ($query) use ($includedIpApplicationIds) {
                    $query->whereIn('ro_ip_application.ip_application_id',$includedIpApplicationIds);
                })
                ->get();
        }

        return $this->model
            ->with($with)
            ->select('id', 'organization_id', 'app_type_id', 'applicant_id', 'is_cancelled')
            ->where([
                'app_type_id' => config('app_constants.app_types.RO'),
                'is_cancelled' => 0
            ])
            ->whereNotIn('id', $excludedRoApplicationIds)
            ->get();
    }

    public function updateFeeInfo($applicationId, $fumigationFee = 0) {
        $feeCalculationService = resolve('App\Services\FeeCalculationService');

        $feeDetailsInfo = $feeCalculationService->getFeeCalculation($applicationId);

        if(!$feeDetailsInfo) {
           return false;
        }

        $application = $this->getDetails($applicationId);

        if($application->is_paid == 1) {
            return false;
        }

        $palletFee = $application->total_pallet_fee;
        $totalProductFee = array_sum(array_column($feeDetailsInfo, 'total_price'));
        $totalAppFee = $totalProductFee + $fumigationFee + $palletFee;

        $isServiceChargeRequired = config('app_constants.payment_options.is_service_charge_required',false);
        $isVatRequired = config('app_constants.payment_options.is_vat_required',false);

        if($isServiceChargeRequired) {
            $serviceCharge = config('app_constants.payment_options.service_charge',0);
        } else {
            $serviceCharge = 0;
        }

        if($isVatRequired) {
            $vatPercentage = config('app_constants.payment_options.vat');
            $vat = ceil($totalAppFee * ($vatPercentage/100));
        } else {
            $vat = 0;
            $vatPercentage = 0;
        }

        $totalFee = $totalAppFee + $serviceCharge + $vat;

        if($application->paid_payment == 0) {
            $appPayable = $totalAppFee;
            $vatPayable = $vat;
            $serviceChargePayable = $serviceCharge;
        } elseif($application->paid_payment >= $totalFee) {
            $appPayable = 0;
            $vatPayable = 0;
            $serviceChargePayable = 0;
        } else {
            $appPayable = $totalAppFee <= $application->paid_payment ? 0 : $totalAppFee - $application->paid_payment;
            $vatPayable = $appPayable === 0 ?
                ($application->paid_payment - $totalAppFee >= $vat ? 0 : $vat - ($application->paid_payment - $totalAppFee)) : $vat;
            $serviceCharge = $vatPayable === 0 ?
                ($application->paid_payment - ($totalAppFee + $vat) >= $serviceCharge ? 0 : $serviceCharge - ($application->paid_payment - ($totalAppFee + $vat))) : $serviceCharge;
        }

        $isPaid = $appPayable == 0 && $serviceChargePayable == 0 && $vatPayable == 0 ? 1 : 0;

        $data = [
            'product_fee' => $totalProductFee,
            'fumigation_fee' => $fumigationFee,
            'vat' => $vat,
            'service_charge' => $serviceCharge,
            'vat_percentage' => $vatPercentage,
            'total_fee' => $totalFee,
            'app_payable' => $appPayable,
            'vat_payable' => $vatPayable,
            'service_charge_payable' => $serviceChargePayable,
            'is_paid' => $isPaid
        ];

        return parent::update($data, $applicationId);
    }

    public function getApprovedIpDetails($certificateNos) {
        return $this->model
            ->with('details')
            ->where([
                'applicant_id' => auth()->user()->id,
                'app_type_id' => config('app_constants.app_types.IP'),
                'is_approved' => 1
            ])
            ->whereIn('certificate_no', $certificateNos)
            ->get();
    }

    public function checkIpLockedAndUpdate($userId, $roApplicationId) {
        $roIpApplicationRepository = resolve('App\Repositories\Interfaces\RoIpApplicationRepositoryInterface');

        $roIpApplications = $roIpApplicationRepository->getIps($roApplicationId);
        $ipApplicationIds = array_column($roIpApplications->toArray(),'ip_application_id');
        $ipAppDetails = $this->getAvailableProductsInfo($userId,true, [], $ipApplicationIds);
        $products = $ipAppDetails['products'];
        $notLockedIps = [];

        foreach($products as $product) {
            if(isset($product['product_quantity_mapping'])) {
                $productId = $product['id'];
                foreach($product['product_quantity_mapping'] as $ipApplicationId => $usedQuantityInfo) {
                    if(!isset($ipAppDetails['ip_applications'][$ipApplicationId])) {
                        continue;
                    }

                    $usedQuantity = $usedQuantityInfo['used_quantity'];

                    $appProducts = $ipAppDetails['ip_applications'][$ipApplicationId]['ip_app_products'];
                    $appProductkey1 = array_search($productId, array_column($appProducts,'product_id'));
                    $appProductkey2 = array_search($productId, array_column($appProducts,'product_name'));

                    if($appProductkey1 >= 0 || $appProductkey2 >= 0) {
                        $appProductkey = $appProductkey2 === false ? $appProductkey1 : $appProductkey2;
                        $quantity = $ipAppDetails['ip_applications'][$ipApplicationId]['ip_app_products'][$appProductkey]['quantity'];

                        if($quantity > $usedQuantity && array_search($ipApplicationId, $notLockedIps) === false) {
                            $notLockedIps[] = $ipApplicationId;
                        }
                    }
                }
            }
        }

        foreach($ipApplicationIds as $ipApplicationId) {
            if(in_array($ipApplicationId, $notLockedIps)) {
                parent::update(['is_locked' => 0], $ipApplicationId);
            } else {
                parent::update(['is_locked' => 1], $ipApplicationId);
            }
        }
    }

    public function isValidIpsForRo($ipAppDetails) {
        if(empty($ipAppDetails['ip_applications'])) {
            return false;
        }

        $sum = array_sum(array_column($ipAppDetails['products'],'available_quantity'));

        return $sum > 0 ? true : false;
    }

    public function updateFeeForOfflineChalan($applicationId, $newAmount, $oldAmount = 0, $isAddOperation = true, $chalanType, $totalPreviousPaid) {
        $applicationDetails = $this->getDetails($applicationId);

        $chalanTypes = config('app_constants.chalan_types');

        $field = $chalanType == $chalanTypes['VAT'] ? 'vat_payable' : 'app_payable';

        if($chalanType == $chalanTypes['VAT']) {
            $payable = $isAddOperation ?
                $applicationDetails->vat - ($totalPreviousPaid + $newAmount) : $applicationDetails->vat - $totalPreviousPaid;
        } else {
            $applicationFee = $applicationDetails->product_fee + $applicationDetails->fumigation_fee
                + $applicationDetails->total_pallet_fee;
            $payable = $isAddOperation ?
                $applicationFee - ($totalPreviousPaid + $newAmount) : $applicationFee - $totalPreviousPaid;
        }

        $payable = $payable < 0 ? 0 : $payable;

        $paidPayment = $isAddOperation ?
            ($applicationDetails->paid_payment - $oldAmount) + $newAmount : $applicationDetails->paid_payment - $newAmount;
        $isPaid = $paidPayment >= $applicationDetails->total_fee ? 1 : 0;

        $data = [
            "$field" => $payable,
            'paid_payment' => $paidPayment,
            'is_paid' => $isPaid,
            'current_status' => $isPaid ?
                config('app_constants.app_statuses.PAID') : config('app_constants.app_statuses.NOT_PAID'),
            'payment_date' => $isPaid ? now() : null
        ];

        parent::update($data, $applicationId);

        if($isPaid) {
            AppPaymentCompleted::dispatch($applicationId);
        }
    }

    public function getLastApprovedApplication($appTypeId) {
        try{
            return $this->model
                ->select('id', 'certificate_no')
                ->whereNotNull('certificate_no')
                ->where([
                    'app_type_id' => $appTypeId,
                    'is_approved' => 1
                ])
                ->orderBy('updated_at', 'DESC')
                ->first();
        } catch(ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getCurrentStageDetails($applicationId) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $stageFlowRepository = resolve('App\Repositories\Interfaces\StageFlowRepositoryInterface');
        $appTaskFieldProcessService = resolve('App\Services\AppTaskFieldProcessService');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $application = $this->getDetails($applicationId);

        if(!$application || ($application && $application->process_flow_id === null)) {
            return false;
        }

        $appHoldingUserId = $application->app_holding_user_id > 0 ? $application->app_holding_user_id : 0;

        $proxyUser = $userRepository->getProxyUser($appHoldingUserId);

        $userRoles = $proxyUser ?
            $userRoleRepository->getRoles($appHoldingUserId) : $userRoleRepository->getRoles(auth()->user()->id);


        $stageDetails = $stageFlowRepository->getStageDetails($application->process_flow_id,
            $application->current_stage, true);

        if($userRoles->count() > 0 && $stageDetails->count() > 0) {
            $allowedButtons = $stageDetails->buttons->filter(function($button) use ($userRoles) {
                $shownForRoleIds = json_decode($button->shown_for_role_ids);
                $roles = $userRoles->pluck('role_id')->toArray();

                return count(array_intersect($shownForRoleIds, $roles)) > 0 ? true : false;
            });

            $stageDetails = $stageDetails->toArray();
            $stageDetails['buttons'] = $allowedButtons->isNotEmpty() ? $allowedButtons->values() : null;

            foreach($stageDetails['tasks'] as $key => $stageTask) {
                $stageDetails['tasks'][$key]['task_fields']
                    = $appTaskFieldProcessService->setTaskFieldValues($applicationId, $stageTask['task_fields']);
            }
        } else {
            $stageDetails = $stageDetails->toArray();
            $stageDetails['buttons'] = null;
        }

        return $stageDetails;
    }

    public function getCurrentStageTaskFields($applicationId) {
        $stageFlowTaskRepository = resolve('App\Repositories\Interfaces\StageFlowTaskRepositoryInterface');

        $application = $this->getDetails($applicationId);

        if(!$application || ($application && $application->process_flow_id === null)) {
            return false;
        }

        return $stageFlowTaskRepository->getProcessTaskFields($application->process_flow_id,
            $application->current_stage);
    }

    public function getCurrentStageButtons($applicationId) {
        $stageButtonRepository = resolve('App\Repositories\Interfaces\StageButtonRepositoryInterface');

        $application = $this->getDetails($applicationId);

        if(!$application || ($application && $application->process_flow_id === null)) {
            return false;
        }

        return $stageButtonRepository->getStageButtons($application->process_flow_id,
            $application->current_stage);
    }

    public function getCurrentStageRoles($applicationId) {
        $processStageRoleRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');

        $application = $this->getDetails($applicationId);

        if(!$application || ($application && $application->process_flow_id === null)) {
            return false;
        }

        return $processStageRoleRepository->getStageRoles($application->process_flow_id, $application->current_stage);
    }

    public function getStageUserTaskField($applicationId, $forwardingUserStageLevel) {
        return $this->model
            ->select('app_task_fields.id', 'app_task_fields.application_id', 'app_task_fields.task_field_id',
                DB::raw('CONVERT(app_task_fields.value_no, UNSIGNED) AS user_id'), 'profiles.fullname')
            ->leftJoin('task_field_stages', 'applications.process_flow_id', '=', 'task_field_stages.process_flow_id')
            ->leftJoin('app_task_fields', 'task_field_stages.task_field_id', '=', 'app_task_fields.task_field_id')
            ->leftJoin('profiles', 'app_task_fields.value_no', '=', 'profiles.user_id')
            ->where([
                'applications.id' => $applicationId,
                'task_field_stages.forwarding_user_stage_level' => $forwardingUserStageLevel
            ])
            ->whereNull([
                'task_field_stages.deleted_at',
                'app_task_fields.deleted_at'
            ])
            ->orderBy('app_task_fields.id', 'DESC')
            ->first();
    }

    public function getAppTaskDetails($applicationId) {
        $stageFlowTaskRepository = resolve('App\Repositories\Interfaces\StageFlowTaskRepositoryInterface');
        $appTaskFieldRepository = resolve('App\Repositories\Interfaces\AppTaskFieldRepositoryInterface');

        $application = $this->getDetails($applicationId);

        if(!$application || ($application && $application->process_flow_id === null)) {
            return false;
        }

        $stageFlowTasks = $stageFlowTaskRepository->getProcessTasks($application->process_flow_id);

        if($stageFlowTasks->count() == 0) {
            return false;
        }

        $stageFlowTasks = $stageFlowTasks->toArray();

        $appTaskFields = $appTaskFieldRepository->getAllTaskFieldDetails($applicationId);

        foreach($stageFlowTasks as $index => $stageFlowTask) {
            if($stageFlowTask['process_task'] == null) {
                continue;
            }

            if(count($stageFlowTask['process_task']['task_fields']) == 0) {
                continue;
            }

            foreach($stageFlowTask['process_task']['task_fields'] as $key => $taskField) {
                $currentAppTaskFields = $appTaskFields->where('task_field_id', $taskField['id']);

                if($currentAppTaskFields->count() == 0) {
                    $stageFlowTasks[$index]['process_task']['task_fields'][$key]['previous_values'] = [];
                } else {
                    $stageFlowTasks[$index]['process_task']['task_fields'][$key]['previous_values'] = array_values($currentAppTaskFields->toArray());
                }
            }
        }

        return collect($stageFlowTasks);
    }

    public function getProductWiseApplications() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'applications.id',
            'product_name',
            'organizations.name',
            'app_types.name',
            'applicants.fullname',
            'app_products.quantity',
            'applications.payment_date',
            'applications.approval_date'
        ];

        $likeQueryKeys = [
            'app_products.product_name',
            'applicants.fullname'
        ];

        $zeroExcludedKeys = [
            'products.id',
            'organizations.id',
            'app_types.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        $whereRaw = '';

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                } elseif($key == 'from_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(applications.payment_date) >= '$value'";
                } elseif($key == 'to_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(applications.payment_date) <= '$value'";
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $query = $this->model
            ->leftJoin('app_products','applications.id','=','app_products.application_id')
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('app_types','applications.app_type_id','=','app_types.id')
            ->leftJoin('profiles as applicants','applications.applicant_id','=','applicants.user_id')
            ->leftJoin('products','app_products.product_id','=','products.id')
            ->leftJoin('product_types','app_products.product_type_id','=','product_types.id')
            ->leftJoin('units','product_types.unit_id','=','units.id')
            ->select('applications.id',
                DB::raw('(CASE WHEN app_products.product_id > 0 THEN products.name ELSE app_products.product_name END) AS product_name'),
                'organizations.name AS organization_name', 'app_types.name AS app_type_name', 'applicants.fullname AS applicant_name',
                'app_products.quantity', 'units.name AS unit_name', 'applications.payment_date AS application_submission_date',
                'applications.approval_date AS application_approval_date', 'applications.current_status')
            ->whereNull('app_products.deleted_at');

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $query->count();
        $queryFiltered = $query
            ->where($filterConditions)
            ->when($whereRaw, function($query, $whereRaw) {
                $query->whereRaw($whereRaw);
            });
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getApprovedApplicationDetails() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'applications.id',
            'applications.certificate_no',
            'applicants.fullname',
            'dae_officials.fullname',
            'applications.approval_date',
            'export_import_country'
        ];

        $likeQueryKeys = [
            'applications.certificate_no',
            'applicants.fullname'
        ];

        $zeroExcludedKeys = [
            'app_types.id',
            'applications.id',
            'organizations.id',
            'origin_country_id',
            'import_export_country_id',
            'pc_details.exporting_country_id',
            'ro_details.exporting_country_id',
            'ip_details.exporting_country_id',
            'pc_details.origin_country_id',
            'ro_details.origin_country_id',
            'ip_details.origin_country_id',
            'app_products.product_type_id'
        ];

        $appDetailsConfig = [
            '',
            [
                'table' => 'pc_details',
                'export_import_country_column' => 'exporting_country_id',
                'origin_country_column' => 'origin_country_id'
            ],
            [
                'table' => 'ro_details',
                'export_import_country_column' => 'exporting_country_id',
                'origin_country_column' => 'origin_country_id'
            ],
            [
                'table' => 'ip_details',
                'export_import_country_column' => 'exporting_country_id',
                'origin_country_column' => 'origin_country_id'
            ]
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        $whereRaw = '';

        $currentAppDetailsConfig = null;

        if(isset($filterKeys['app_types.id'])) {
            $currentAppDetailsConfig = isset($appDetailsConfig[$filterKeys['app_types.id']]) ?
                $appDetailsConfig[$filterKeys['app_types.id']] : null;
        }

        if(isset($filterKeys['export_import_country_id'])) {
            $exportImportCountryId = $filterKeys['export_import_country_id'];
            unset($filterKeys['export_import_country_id']);

            if($currentAppDetailsConfig) {
                $column = $currentAppDetailsConfig['table'] . '.' . $currentAppDetailsConfig['export_import_country_column'];
                $filterKeys[$column] = $exportImportCountryId;
            }
        }

        if(isset($filterKeys['origin_country_id'])) {
            $originCountryId = $filterKeys['origin_country_id'];
            unset($filterKeys['origin_country_id']);

            if($currentAppDetailsConfig) {
                $column = $currentAppDetailsConfig['table'] . '.' . $currentAppDetailsConfig['origin_country_column'];
                $filterKeys[$column] = $originCountryId;
            }
        }

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                } elseif($key == 'from_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(applications.approval_date) >= '$value'";
                } elseif($key == 'to_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(applications.approval_date) <= '$value'";
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $query = $this->model
            ->with([
                'appProducts:id,application_id,product_id,product_name,quantity', 'appProducts.product:id,name',
                'details:id,application_id,origin_country_id,exporting_country_id'
            ])
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('app_types','applications.app_type_id','=','app_types.id')
            ->leftJoin('profiles as applicants','applications.applicant_id','=','applicants.user_id')
            ->leftJoin('profiles as dae_officials','applications.approved_by','=','dae_officials.user_id')
            ->leftJoin('app_products','applications.id','=','app_products.application_id')
            ->leftJoin('pc_details', function($join) {
                $join->on('applications.applicationable_id', '=', 'pc_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.PC'));
            })
            ->leftJoin('ro_details',function($join) {
                $join->on('applications.applicationable_id', '=', 'ro_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.RO'));
            })
            ->leftJoin('ip_details',function($join) {
                $join->on('applications.applicationable_id', '=', 'ip_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.IP'));
            })
            ->select(DB::raw('DISTINCT applications.id'), 'app_types.short_name AS app_type_name', 'applicants.fullname AS applicant_name',
                'dae_officials.fullname AS dae_official_name', 'applications.approval_date AS application_approval_date',
                'applications.certificate_no', 'applications.applicationable_type', 'applications.applicationable_id')
            ->where('is_approved', 1);

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $query->count();
        $queryFiltered = $query
            ->where($filterConditions)
            ->when($whereRaw, function($query, $whereRaw) {
                $query->whereRaw($whereRaw);
            });
        $data['recordsFiltered'] = $queryFiltered->count();
        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function setProductReleasedQuantity($userId, $includedIpApplicationIds) {
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');

        $productAndProductTypeInfo = $this->getAvailableProductsInfo($userId, true, [], $includedIpApplicationIds);

        if(!isset($productAndProductTypeInfo['products'])) {
            return false;
        }

        $products = $productAndProductTypeInfo['products'];
        $appProducts = [];

        foreach($products as $product) {

            $productIdColumn = $product['id'] > 0 ? 'product_id' : 'product_name';

            if(!isset($product['product_quantity_mapping'])) {
                continue;
            }

            foreach($product['product_quantity_mapping'] as $ipApplicationId => $quantityDetails) {
                $appProducts[] = [
                    "$productIdColumn" => $product['id'],
                    'product_type_id' => $product['product_type_id'],
                    'application_id' => $ipApplicationId,
                    'released_quantity' => $quantityDetails['used_quantity']
                ];
            }
        }

        if(!isset($appProducts)) {
            return false;
        }

        $appProductRepository->setProductReleasedQuantity($appProducts);
    }

    public function searchCertificate($appTypeId, $certificateNo) {
        $application = $this->model
            ->with(['appType:id,name', 'organization:id,name', 'applicant:id,user_id,fullname'])
            ->leftJoin('ro_details',function($join) {
                $join->on('applications.applicationable_id', '=', 'ro_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.RO'));
            })
            ->leftJoin('config_purposes','ro_details.purpose_id','=','config_purposes.id')
            ->select('config_purposes.name as purpose_name','config_purposes.is_research','applications.id', 'applications.app_type_id', 'applications.applicant_id', 'applications.organization_id', 'applications.approval_date', 'applications.certificate_validity_date')
            ->where([
                'app_type_id' => $appTypeId,
                'certificate_no' => $certificateNo
            ])
            ->first();

        if($application) {
            return $application;
        }

        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        return $certificateRepository->searchCertificate($appTypeId, $certificateNo);
    }

    public function transferPaginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'applications.id',
            'applicants.fullname',
            'app_types.name',
            'dae_users.fullname',
            'organizations.name',
            'applications.app_date',
            'applications.current_status',
            'applications.payment_date',
            'applications.is_paid'
        ];

        $likeQueryKeys = [];

        $zeroExcludedKeys = [
            'applications.id',
            'applications.app_type_id',
            'applications.applicant_id',
            'applications.organization_id',
            'applications.app_holding_user_id'
        ];

        $whereConditions = [
            'is_paid' => 1,
            'is_approved' => 0,
            'is_cancelled' => 0
        ];

        $appStatuses = [ 'FORWARDED', 'BACKWARDED'];

        $selectFields = 'applications.id, app_types.short_name as app_type_short_name, app_types.name as app_type_name, applicants.fullname as applicant, 
                organizations.name as organization, dae_users.fullname as dae_user, applications.current_status, 
                DATE_FORMAT(applications.app_date, "%d-%m-%Y") as app_date, 
                DATE_FORMAT(applications.payment_date, "%d-%m-%Y") as payment_date, applications.is_paid, ro_details.memo_id';

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
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
        $data['recordsTotal'] = $this->model->where($whereConditions)->whereIn('current_status', $appStatuses)->count();
        $queryFiltered = DB::table('applications')
            ->leftJoin('app_types','applications.app_type_id','=','app_types.id')
            ->leftJoin('profiles as applicants','applications.applicant_id','=','applicants.user_id')
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('profiles as dae_users','applications.app_holding_user_id','=','dae_users.user_id')
            ->leftJoin('ro_details','applications.id','=','ro_details.application_id')
            ->leftJoin('users as app_holding_users','applications.app_holding_user_id','=','app_holding_users.id')
            ->selectRaw($selectFields)
            ->whereNull('applications.deleted_at')
            ->whereIn('current_status', $appStatuses)
            ->where(array_merge($filterConditions, $whereConditions));
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function checkApprovedApplicationValidity($applicationId, $checkAppLock = false) {
        $status = $this->model
            ->where([
                'is_approved' => 1,
                ['certificate_validity_date', '>=', now()->format('Y-m-d')]
            ])
            ->when($checkAppLock, function($query) {
                $query->where('is_locked', 1);
            })
            ->find($applicationId);

        return $status ? true : false;
    }

    public function checkIpApprovedApplicationValidity($applicationId) {
        $status = $this->model
            ->where([
                'is_approved' => 1,
                'is_locked' => 0,
                ['certificate_validity_date', '>=', now()->format('Y-m-d')]
            ])
            ->find($applicationId);

        return $status ? true : false;
    }

    private function getPcApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses) {
        $pcApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where('app_type_id', $appTypes['PC'])
            ->count();

        $approvedPcApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_approved' => 1
            ])
            ->count();

        $cancelledPcApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_cancelled' => 1
            ])
            ->count();

        $paidPcApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_paid' => 1
            ])
            ->count();

        $unpaidPcApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_paid' => 0
            ])
            ->count();

        $processingPcApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Submitted',
                'count' => $pcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Approved',
                'count' => $approvedPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Cancelled',
                'count' => $cancelledPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid',
                'count' => $paidPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not paid',
                'count' => $unpaidPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing',
                'count' => $processingPcApplications
            ]
        ];
    }

    private function getPcApplicationForDaeDashboard($userId, $userTypeLabel, $organizationId, $appTypes, $appStatuses) {
        $pcApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where('app_type_id', $appTypes['PC'])
            ->count();

        $approvedPcApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('approved_by', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_approved' => 1
            ])
            ->count();

        $cancelledPcApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('rejected_by', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_cancelled' => 1
            ])
            ->count();

        $processingPcApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('app_holding_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        $paidPcApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_paid' => 1
            ])
            ->count();

        $unpaidPcApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where([
                'app_type_id' => $appTypes['PC'],
                'is_paid' => 0
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Applied',
                'count' => $pcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Approved',
                'count' => $approvedPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Cancelled',
                'count' => $cancelledPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid',
                'count' => $paidPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not Paid',
                'count' => $unpaidPcApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing',
                'count' => $processingPcApplications
            ]
        ];
    }

    private function getRoApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses) {
        $roApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where('app_type_id', $appTypes['RO'])
            ->count();

        $approvedRoApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_approved' => 1
            ])
            ->count();

        $cancelledRoApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_cancelled' => 1
            ])
            ->count();

        $paidRoApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_paid' => 1
            ])
            ->count();

        $unpaidRoApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_paid' => 0
            ])
            ->count();

        $processingRoApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Submitted',
                'count' => $roApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Approved',
                'count' => $approvedRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Cancelled',
                'count' => $cancelledRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid',
                'count' => $paidRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not paid',
                'count' => $unpaidRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing',
                'count' => $processingRoApplications
            ]
        ];
    }

    private function getRoApplicationForDaeDashboard($userId, $userTypeLabel, $organizationId, $appTypes, $appStatuses) {
        $roApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where('app_type_id', $appTypes['RO'])
            ->count();

        $approvedRoApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('approved_by', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_approved' => 1
            ])
            ->count();

        $cancelledRoApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('rejected_by', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_cancelled' => 1
            ])
            ->count();

        $paidRoApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_paid' => 1
            ])
            ->count();

        $unpaidRoApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_paid' => 0
            ])
            ->count();

        $processingRoApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('app_holding_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['RO'],
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Applied',
                'count' => $roApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Approved',
                'count' => $approvedRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Cancelled',
                'count' => $cancelledRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid',
                'count' => $paidRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not paid',
                'count' => $unpaidRoApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing',
                'count' => $processingRoApplications
            ]
        ];
    }

    private function getIpApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses) {
        $ipApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where('app_type_id', $appTypes['IP'])
            ->count();

        $approvedIpApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_approved' => 1
            ])
            ->count();

        $cancelledIpApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_cancelled' => 1
            ])
            ->count();

        $paidIpApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_paid' => 1
            ])
            ->count();

        $unpaidIpApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_paid' => 0
            ])
            ->count();

        $processingIpApplications = $this->model
            ->when($userTypeLabel == 'APPLICANT', function($query) use ($userId) {
                $query->where('applicant_id', $userId);
            })
            ->when($userTypeLabel == 'CNF', function($query) use ($userId) {
                $query->where('cnf_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Submitted',
                'count' => $ipApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Approved',
                'count' => $approvedIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Cancelled',
                'count' => $cancelledIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid',
                'count' => $paidIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not paid',
                'count' => $unpaidIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing',
                'count' => $processingIpApplications
            ]
        ];
    }

    private function getIpApplicationForDaeDashboard($userId, $userTypeLabel, $organizationId, $appTypes, $appStatuses) {
        $ipApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where('app_type_id', $appTypes['IP'])
            ->count();

        $approvedIpApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('approved_by', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_approved' => 1
            ])
            ->count();

        $cancelledIpApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('rejected_by', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_cancelled' => 1
            ])
            ->count();

        $processingIpApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->when($userTypeLabel == 'DAE_USER', function ($query) use ($userId) {
                $query->where('app_holding_user_id', $userId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        $paidIpApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_paid' => 1
            ])
            ->count();

        $unpaidIpApplications = $this->model
            ->when(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN']), function($query) use ($organizationId) {
                $query->where('organization_id', $organizationId);
            })
            ->where([
                'app_type_id' => $appTypes['IP'],
                'is_paid' => 0
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Applied',
                'count' => $ipApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Approved',
                'count' => $approvedIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Cancelled',
                'count' => $cancelledIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid',
                'count' => $paidIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not paid',
                'count' => $unpaidIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing',
                'count' => $processingIpApplications
            ]
        ];
    }

    public function getApplicationForDashboard($userId, $userTypeLabel, $organizationId = 0) {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $appTypes = config('app_constants.app_types');
        $appStatuses = config('app_constants.app_statuses');

        if($userTypeLabel == 'APPLICANT') {
            $pcApplication = $this->getPcApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses);
            $roApplication = $this->getRoApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses);
            $ipApplication = $this->getIpApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses);

            return [
                [
                    'label' => 'Phytosanitary Certificate',
                    'report' => $pcApplication
                ],
                [
                    'label' => 'Release Order',
                    'report' => $roApplication
                ],
                [
                    'label' => 'Import Permit',
                    'report' => $ipApplication
                ]
            ];
        } elseif($userTypeLabel == 'CNF') {
            $roApplication = $this->getPcApplicationForDashboard($userId, $userTypeLabel, $appTypes, $appStatuses);
            $assignedRoApplication = $cnfIpAssignmentRepository->getCnfAssignmentForDashboard($userId);
            $unlockedAssignmentIds = $cnfIpAssignmentRepository->getAllUnlockedAssignments($userId);

            $unlockedAssignment = count($unlockedAssignmentIds) > 0 ?
                $this->getApplicationAssignments($unlockedAssignmentIds, $appStatuses) : [];

            $assignedRoApplication = array_merge($assignedRoApplication, $unlockedAssignment);

            return [
                [
                    'label' => 'Release Order',
                    'report' => $roApplication
                ],
                [
                    'label' => 'C&F Assignment',
                    'report' => $assignedRoApplication
                ]
            ];
        } elseif(in_array($userTypeLabel, ['DAE_USER', 'DAE_ADMIN', 'SYSTEM_ADMIN'])) {
            $pcApplication = $this->getPcApplicationForDaeDashboard($userId, $userTypeLabel, $organizationId, $appTypes, $appStatuses);
            $roApplication = $this->getRoApplicationForDaeDashboard($userId, $userTypeLabel, $organizationId, $appTypes, $appStatuses);
            $ipApplication = $this->getIpApplicationForDaeDashboard($userId, $userTypeLabel, $organizationId, $appTypes, $appStatuses);

            return [
                [
                    'label' => 'Phytosanitary Certificate',
                    'report' => $pcApplication
                ],
                [
                    'label' => 'Release Order',
                    'report' => $roApplication
                ],
                [
                    'label' => 'Import Permit',
                    'report' => $ipApplication
                ]
            ];
        }

        return [];
    }

    private function getApplicationAssignments($cnfIpAssignmentIds, $appStatuses) {
        $submittedUnlocked = $this->model
            ->selectRaw('DISTINCT cnf_ip_assignment_id')
            ->whereIn('cnf_ip_assignment_id', $cnfIpAssignmentIds)
            ->where([
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->count();

        $notPaidUnlocked = $this->model
            ->selectRaw('DISTINCT cnf_ip_assignment_id')
            ->whereIn('cnf_ip_assignment_id', $cnfIpAssignmentIds)
            ->where([
                'is_approved' => 0,
                'is_cancelled' => 0,
                'is_paid' => 0
            ])
            ->count();

        $paidUnlocked = $this->model
            ->selectRaw('DISTINCT cnf_ip_assignment_id')
            ->whereIn('cnf_ip_assignment_id', $cnfIpAssignmentIds)
            ->where([
                'is_approved' => 0,
                'is_cancelled' => 0,
                'is_paid' => 1
            ])
            ->count();

        $rejectedUnlocked = $this->model
            ->selectRaw('DISTINCT cnf_ip_assignment_id')
            ->whereIn('cnf_ip_assignment_id', $cnfIpAssignmentIds)
            ->where([
                'is_cancelled' => 1
            ])
            ->count();

        $processingUnlocked = $this->model
            ->selectRaw('DISTINCT cnf_ip_assignment_id')
            ->whereIn('cnf_ip_assignment_id', $cnfIpAssignmentIds)
            ->where([
                'is_paid' => 1,
                'is_approved' => 0,
                'is_cancelled' => 0
            ])
            ->whereIn('current_status', [
                $appStatuses['FORWARDED'],
                $appStatuses['BACKWARDED']
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Submitted (Unlocked)',
                'count' => $submittedUnlocked
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Not Paid (Unlocked)',
                'count' => $notPaidUnlocked
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Paid (Unlocked)',
                'count' => $paidUnlocked
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Rejected (Unlocked)',
                'count' => $rejectedUnlocked
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Processing (Unlocked)',
                'count' => $processingUnlocked
            ]
        ];
    }
}
