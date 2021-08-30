<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class UniqueMemoWithApprovalDate implements Rule
{
    private $memo;
    private $applicationId;

    public function __construct($memo, $applicationId)
    {
        $this->memo = $memo;
        $this->applicationId = $applicationId > 0 ? $applicationId : 0;
    }

    public function passes($attribute, $value)
    {
        $memoRepository = resolve('App\Repositories\Interfaces\MemoRepositoryInterface');

        if(empty($this->memo['memo_no']) && empty($this->memo['approval_date'])) {
            return true;
        }

        $this->memo['approval_date'] = Carbon::createFromFormat(config('app_constants.date_format'), $this->memo['approval_date'])->toDateString();

        return $memoRepository->isUniqueWithApprovalDate($this->memo['memo_no'], $this->memo['approval_date'], $this->applicationId);
    }

    public function message()
    {
        return 'Invalid memo no (according to : approval date)';
    }
}
