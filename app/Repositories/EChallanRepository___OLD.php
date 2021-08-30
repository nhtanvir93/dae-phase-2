<?php

namespace App\Repositories;

use App\Models\ChallanTransaction;
use App\Repositories\Interfaces\EChallanRepositoryInterface;

class EChallanRepository extends BaseRepository implements EChallanRepositoryInterface
{
    public function __construct(ChallanTransaction $model)
    {
        parent::__construct($model);
        $this->messages = null;
    }

    public function getDetails($id, $with = false)
    {
        // 
    }

    public function challan($appId, $userId = null)
    {
        $echallanService = resolve('App\Services\EChallanService');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        try {
            $result = null;
            $app = $applicationRepository->getDetails($appId, true);

            if ($app) {
                if ($userId) {
                    $echallanService->manuallyloggedInApplicant($userId);
                }

                $isChallanDone = $app->is_challan_done;

                if ($isChallanDone) {
                    $this->messages = 'Your challan has already been done.';
                    $result = ['status' => false, 'messages' => $this->messages];
                } else {
                    $cauth = $echallanService->apiAuthRequest($app);
                    $authData = $echallanService->prepareAuthData($app->id, $cauth['status'], $cauth['code']);
                    $this->messages = 'Something went wrong.';
                    $result = ['status' => false, 'messages' => $this->messages];

                    if ($authData) {
                        $storeChalan = $this->model->create($authData);
                        $challanId = optional($storeChalan)->id;

                        $cmake = $echallanService->apiChallanRequest($app);
                        $chalanData = $echallanService->prepareChallanData($app->id, $cmake['status'], $cmake['code']);

                        if ($chalanData) {
                            parent::update($chalanData, $challanId);
                            $applicationRepository->update(['is_challan_done' => true], $app->id);
                            $this->messages = 'Your Challan process has been done.';
                            $result = ['status' => $cmake['status'], 'messages' => $this->messages];
                        }
                    }
                }

                return $result;
            } else {
                $this->messages = 'Invalid application.';
                return ['status' => false, 'messages' => $this->messages];
            }
         } catch (\Exception $e) {
            $this->messages = 'Something went wrong.';
            return ['status' => false, 'messages' => $this->messages];
        }
    }
}