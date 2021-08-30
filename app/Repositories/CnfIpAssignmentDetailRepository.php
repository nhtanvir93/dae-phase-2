<?php
namespace App\Repositories;

use App\Models\CnfIpAssignmentDetail;
use App\Repositories\Interfaces\CnfIpAssignmentDetailRepositoryInterface;

class CnfIpAssignmentDetailRepository extends BaseRepository implements CnfIpAssignmentDetailRepositoryInterface
{
    public function __construct(CnfIpAssignmentDetail $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
    
    }

    public function createAll($cnfIpAssignmentDetails, $cnfIpAssignmentId) {
        foreach($cnfIpAssignmentDetails as $cnfIpAssignmentDetail) {
            unset($cnfIpAssignmentDetail['app_product_id']);
            $cnfIpAssignmentDetail['cnf_ip_assignment_id'] = $cnfIpAssignmentId;
            parent::create($cnfIpAssignmentDetail);
        }
    }
}