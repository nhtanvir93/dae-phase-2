<?php

namespace App\Services;

use App\Repositories\Interfaces\ApplicationRepositoryInterface;
use App\Repositories\Interfaces\AppStatusLogRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use App\Repositories\Interfaces\RoDetailRepositoryInterface;
use Carbon\Carbon;
use App\Jobs\SendSms;
use Illuminate\Support\Facades\DB;

class ProcessFlowService
{
    const JUNE = 6;
    const JULY = 7;
    const OTHER_SEEDS = 12;

    public function setAppProcessFlow($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);
        $isRestricted = $appProductRepository->hasRestrictedProduct($applicationId);

        if(!$application) {
            return false;
        }

        $processFlow = $processFlowRepository->getActiveProcessFlow($application->app_type_id, $application->organization_id, $isRestricted);

        if(!$processFlow) {
            return false;
        }

        return $applicationRepository->update([
            'process_flow_id' => $processFlow->id
        ], $applicationId);
    }

    public function getPreviousStage($applicationId) {
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');

        return $appStatusLogRepository->getPreviousStage($applicationId);
    }

    public function getNextStage($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $stageFlowRepository = resolve('App\Repositories\Interfaces\StageFlowRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if(!$application) {
            return false;
        }

        $currentStage = $stageFlowRepository->getStageDetails($application->process_flow_id, $application->current_stage);

        if(!$currentStage) {
            return false;
        }

        $nextStage = $stageFlowRepository->getNextStage($application->process_flow_id, $application->current_stage,
            $application->is_inspection_enabled, $application->is_lab_test_enabled);

        return $nextStage;
    }

    public function getPreviousStageUser($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if(!$application) {
            return false;
        }

        $appStatusLog = $appStatusLogRepository->getPreviousStageUser($applicationId, $application->current_stage);
        return $appStatusLog ? $appStatusLog->from_user_id : false;
    }

    public function getStageUser($applicationId, $stageLevel)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $processStageRoleRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $processStageRoles = $processStageRoleRepository->getAllRoleDetails($application->process_flow_id, $stageLevel);

        if ($processStageRoles->count() == 0) {
            return false;
        } elseif ($processStageRoles->count() == 1 && $processStageRoles->first()->user_from_stage !== null) {
            $processStageRole = $processStageRoles->first();
            $appStatusLog = $appStatusLogRepository->getPreviousStageUser($applicationId, $processStageRole->user_from_stage);

            return $appStatusLog ? $appStatusLog->from_user_id : false;
        } else {
            $appTaskField = $applicationRepository->getStageUserTaskField($applicationId, $stageLevel);

            if($appTaskField) {
                return $appTaskField->user_id;
            }

            $roleIds = $processStageRoles->sortBy('role_id')->pluck('role_id')->toArray();

            $previousAppUserRoleIds = $appStatusLogRepository
                ->lastApplicationUserRoles($applicationId, $application->app_type_id, $stageLevel);

            if($previousAppUserRoleIds) {
                $matchedRoleIndex = false;
                foreach ($roleIds as $key => $roleId) {
                    if (in_array($roleId, $previousAppUserRoleIds)) {
                        $matchedRoleIndex = $key;
                        break;
                    }
                }

                if ($matchedRoleIndex === false) {
                    $searchRoleIndex = 0;
                } else {
                    $searchRoleIndex = $matchedRoleIndex == count($roleIds) - 1 ? 0 : $matchedRoleIndex + 1;
                }
            } else {
                $searchRoleIndex = 0;
            }

            $appType = $appTypeRepository->getDetails($application->app_type_id);

            if (!$appType) {
                return false;
            }

            $businessType = $appType->type;

            if($businessType) {
                $searchRoleIds = [
                    config("app_constants.roles.$businessType"),
                    $roleIds[$searchRoleIndex]
                ];
            } else {
                $searchRoleIds = [
                    $roleIds[$searchRoleIndex]
                ];
            }

            $appHoldingUser = $userRoleRepository->getActiveUserUsingRoles($application->organization_id, $searchRoleIds);

            return $appHoldingUser ? $appHoldingUser->id : false;
        }
    }

    public function getStartingStageUser($organizationId, $appTypeId, $processFlowId) {
        $processStageRoleRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $processStageRoles = $processStageRoleRepository->getAllRoleDetails($processFlowId, 0);

        if ($processStageRoles->count() == 0) {
            return false;
        } elseif ($processStageRoles->whereNotNull('user_from_stage')->count() > 0) {
            return false;
        } else {
            $roleIds = $processStageRoles->sortBy('role_id')->pluck('role_id')->toArray();

            $searchRoleIndex = 0;

            $appType = $appTypeRepository->getDetails($appTypeId);

            if (!$appType) {
                return false;
            }

            $businessType = $appType->type;

            if($businessType) {
                $searchRoleIds = [
                    config("app_constants.roles.$businessType"),
                    $roleIds[$searchRoleIndex]
                ];
            } else {
                $searchRoleIds = [
                    $roleIds[$searchRoleIndex]
                ];
            }

            $appHoldingUser = $userRoleRepository->getActiveUserUsingRoles($organizationId, $searchRoleIds);

            return $appHoldingUser ? $appHoldingUser->id : false;
        }
    }

    public function getNextStageUser($applicationId)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $processStageRoleRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $nextStage = $this->getNextStage($applicationId);

        if (!$nextStage) {
            return false;
        }

        $appTaskField = $applicationRepository->getStageUserTaskField($applicationId, $nextStage->level);

        if($appTaskField) {
            return $appTaskField->user_id;
        }

        $processStageRoles = $processStageRoleRepository->getAllRoleDetails($application->process_flow_id, $nextStage->level);

        if ($processStageRoles->count() == 0) {
            return false;
        } elseif ($processStageRoles->count() == 1 && $processStageRoles->first()->user_from_stage !== null) {
            $processStageRole = $processStageRoles->first();
            $appStatusLog = $appStatusLogRepository->getStageUser($applicationId, $processStageRole->user_from_stage);

            return $appStatusLog ? $appStatusLog->from_user_id : false;
        } else {
            $roleIds = $processStageRoles->sortBy('role_id')->pluck('role_id')->toArray();

            $previousAppUserRoleIds = $appStatusLogRepository
                ->lastApplicationUserRoles($applicationId, $application->app_type_id, $nextStage->level);

            if($previousAppUserRoleIds) {
                $matchedRoleIndex = false;
                foreach ($roleIds as $key => $roleId) {
                    if (in_array($roleId, $previousAppUserRoleIds)) {
                        $matchedRoleIndex = $key;
                        break;
                    }
                }

                if ($matchedRoleIndex === false) {
                    $searchRoleIndex = 0;
                } else {
                    $searchRoleIndex = $matchedRoleIndex == count($roleIds) - 1 ? 0 : $matchedRoleIndex + 1;
                }
            } else {
                $searchRoleIndex = 0;
            }

            $appType = $appTypeRepository->getDetails($application->app_type_id);

            if (!$appType) {
                return false;
            }

            $businessType = $appType->type;

            $searchRoleIds = [
                config("app_constants.roles.$businessType"),
                $roleIds[$searchRoleIndex]
            ];

            $appHoldingUser = $userRoleRepository->getActiveUserUsingRoles($application->organization_id, $searchRoleIds);

            return $appHoldingUser ? $appHoldingUser->id : false;
        }
    }

    public function applicationUpdatedAfterRecheck($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $application->app_holding_user_id,
            'status' => config("app_constants.app_statuses.FORWARDED")
        ];

        $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($roDetails) {
            $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
            $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $notificationRepository->createApplicationEventMessage(
            $application->app_holding_user_id,
            $applicationId,
            config('app_constants.app_statuses.FORWARDED'),
            $notificationTemplateService->getForwardingNotification($applicationId),
            $notificationUrl
        );

        return $applicationRepository->update([
            'current_status' => config("app_constants.app_statuses.FORWARDED")
        ], $applicationId);
    }

    public function recheckApplication($applicationId, $comment) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $organization = $organizationRepository->getDetails($application->organization_id);

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $application->applicant_id,
            'status' => config("app_constants.app_statuses.RECHECKED"),
            'comment' => $comment
        ];

        $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($roDetails) {
            $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
            $notificationUrlTemplate = config("app_constants.notification_url_templates.RECHECKED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.RECHECKED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $message = $notificationTemplateService->getRecheckingNotification($applicationId, $organization->name);

        $notificationRepository->createApplicationEventMessage(
            $application->applicant_id,
            $applicationId,
            config('app_constants.app_statuses.RECHECKED'),
            $message,
            $notificationUrl
        );

        SendSms::dispatch(
                $application->applicant_id,
                "Rechecked Application ($applicationId)",
                $message,
                config("app_constants.app_statuses.RECHECKED"),
                $applicationId
            )
            ->onQueue('recheck-sms');

        return $applicationRepository->update([
            'current_status' => config("app_constants.app_statuses.RECHECKED"),
            'last_comment' => $comment
        ], $applicationId);
    }

    public function rejectApplication($applicationId, $comment) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');
        $roIpApplicationRepository = resolve('App\Repositories\Interfaces\RoIpApplicationRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $organization = $organizationRepository->getDetails($application->organization_id);

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $application->applicant_id,
            'status' => config("app_constants.app_statuses.REJECTED"),
            'comment' => $comment
        ];

        $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($roDetails) {
            $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
            $notificationUrlTemplate = config("app_constants.notification_url_templates.REJECTED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.REJECTED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $message = $notificationTemplateService->getRejectionNotification($applicationId, $organization->name);

        $notificationRepository->createApplicationEventMessage(
            $application->applicant_id,
            $applicationId,
            config('app_constants.app_statuses.REJECTED'),
            $message,
            $notificationUrl
        );

        SendSms::dispatch(
                $application->applicant_id,
                "Rejected Application ($applicationId)",
                $message,
                config("app_constants.app_statuses.REJECTED"),
                $applicationId
            )
            ->onQueue('application-sms')
            ->afterResponse();

        if(isset($roDetails) && $roDetails->memo_id == null) {
            $ipApplicationIds = $roIpApplicationRepository->getIps($applicationId)->pluck('ip_application_id')->toArray();
            $applicationRepository->setProductReleasedQuantity(auth()->user()->id, $ipApplicationIds);
        }

        return $applicationRepository->update([
            'is_cancelled' => 1,
            'rejected_by' => auth()->user()->id,
            'rejection_date' => now(),
            'current_status' => config("app_constants.app_statuses.REJECTED"),
            'approved_by' => null,
            'is_approved' => 0,
            'certificate_no' => null,
            'certificate_validity_date' => null,
            'last_comment' => $comment
        ], $applicationId);
    }

    public function approveApplication($applicationId, $comment) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $organization = $organizationRepository->getDetails($application->organization_id);

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $application->applicant_id,
            'status' => config("app_constants.app_statuses.APPROVED"),
            'comment' => $comment
        ];

        $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($roDetails) {
            $roUserId = $application->cnf_user_id ? $application->cnf_user_id : $application->applicant_id;

            if($roDetails->memo_id) {
                $roIndex = 'RO_WITH_MEMO';
            } else {
                $roIndex = 'RO_WITH_IP';

                $roDetailRepository->setProductReleaseQuantity($application->id, $roUserId);
                $applicationRepository->checkIpLockedAndUpdate($roUserId, $application->id);

                $cnfIpAssignmentRepository->update([
                    'is_locked' => 1
                ],$application->cnf_ip_assignment_id);
            }

            $notificationUrlTemplate = config("app_constants.notification_url_templates.APPROVED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.APPROVED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $notificationRepository->createApplicationEventMessage(
            $application->applicant_id,
            $applicationId,
            config('app_constants.app_statuses.APPROVED'),
            $notificationTemplateService->getApprovalNotification($applicationId, $organization->name),
            $notificationUrl
        );

        $message = $notificationTemplateService->getApprovalNotification($applicationId, $organization->name);

        SendSms::dispatch(
                $application->applicant_id,
                "Approved Application ($applicationId)",
                $message,
                config("app_constants.app_statuses.APPROVED"),
                $applicationId
            )
            ->onQueue('approve-sms');

        return $applicationRepository->update([
            'is_approved' => 1,
            'approved_by' => auth()->user()->id,
            'approval_date' => now(),
            'current_status' => config("app_constants.app_statuses.APPROVED"),
            'certificate_no' => $this->getNextCertificateNo($application->app_type_id),
            'certificate_validity_date' => $this->getCertificateValidityDate($application->id, $application->app_type_id),
            'is_cancelled' => 0,
            'rejected_by' => null,
            'last_comment' => $comment
        ], $applicationId);
    }


    public function forwardApplicationFromApplicant($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $nextAppHoldingUserId = $this->getStageUser($applicationId, $application->current_stage);

        if(!$nextAppHoldingUserId) {
            return false;
        }

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $nextAppHoldingUserId,
            'status' => config("app_constants.app_statuses.FORWARDED")
        ];

        $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($roDetails) {
            $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
            $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $notificationRepository->createApplicationEventMessage(
            $nextAppHoldingUserId,
            $applicationId,
            config('app_constants.app_statuses.FORWARDED'),
            $notificationTemplateService->getForwardingNotification($applicationId),
            $notificationUrl
        );

        return $applicationRepository->update([
            'app_holding_user_id' => $nextAppHoldingUserId,
            'current_status' => config("app_constants.app_statuses.FORWARDED"),
        ], $applicationId);
    }

    public function forwardApplication($applicationId, $comment) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'status' => config("app_constants.app_statuses.FORWARDED"),
            'comment' => $comment
        ];

        $appStatusLogId = $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $nextStage = $this->getNextStage($applicationId);

        if(!$nextStage) {
           return false;
        }

        $nextStageLevel = $nextStage->level;
        $nextAppHoldingUserId = $this->getNextStageUser($applicationId);

        if(!$nextAppHoldingUserId) {
            return false;
        }

        $appStatusLogRepository->update([
            'to_user_id' => $nextAppHoldingUserId
        ], $appStatusLogId);

        if($roDetails) {
            $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
            $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $notificationRepository->createApplicationEventMessage(
            $nextAppHoldingUserId,
            $applicationId,
            config('app_constants.app_statuses.FORWARDED'),
            $notificationTemplateService->getForwardingNotification($applicationId),
            $notificationUrl
        );

        return $applicationRepository->update([
            'current_stage' => $nextStageLevel,
            'app_holding_user_id' => $nextAppHoldingUserId,
            'current_status' => config("app_constants.app_statuses.FORWARDED"),
            'last_comment' => $comment
        ], $applicationId);
    }

    public function backwardApplication($applicationId, $comment) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        if (!$application) {
            return false;
        }

        $roDetails = null;

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
        }

        $previousStage = $this->getPreviousStage($applicationId);

        if(!$previousStage) {
            return false;
        }

        $previousStageLevel = $previousStage->stage;
        $previousAppHoldingUserId = $this->getStageUser($applicationId, $previousStageLevel);

        if(!$previousAppHoldingUserId) {
            return false;
        }

        $appStatusLogData = [
            'application_id' => $applicationId,
            'stage' => $application->current_stage,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $previousAppHoldingUserId,
            'status' => config("app_constants.app_statuses.BACKWARDED"),
            'comment' => $comment
        ];

        $appStatusLogRepository->createFromPartial($appStatusLogData);

        if($roDetails) {
            $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
            $notificationUrlTemplate = config("app_constants.notification_url_templates.BACKWARDED.$application->app_type_id.$roIndex");
        } else {
            $notificationUrlTemplate = config("app_constants.notification_url_templates.BACKWARDED.$application->app_type_id");
        }

        $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

        $notificationRepository->createApplicationEventMessage(
            $previousAppHoldingUserId,
            $applicationId,
            config('app_constants.app_statuses.BACKWARDED'),
            $notificationTemplateService->getBackwardingNotification($applicationId),
            $notificationUrl
        );

        return $applicationRepository->update([
            'current_stage' => $previousStageLevel,
            'app_holding_user_id' => $previousAppHoldingUserId,
            'current_status' => config("app_constants.app_statuses.BACKWARDED"),
            'last_comment' => $comment
        ], $applicationId);
    }

    public function getNextCertificateNo($appTypeId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $now = Carbon::now();
        $currentYear = $now->year;
        $nextYear = $currentYear + 1;
        $previousYear = $currentYear - 1;

        $certificatePrefix = null;

        if($now->month > self::JUNE) {
            $certificatePrefix = $currentYear . '-' . substr($nextYear,2,2) . '-';
        } else {
            $certificatePrefix = $previousYear . '-' . substr($currentYear,2,2) . '-';
        }

        $application = $applicationRepository->getLastApprovedApplication($appTypeId);

        if(!$application) {
            return $certificatePrefix . 1;
        }

        $certificateNoArray = explode('-', $application->certificate_no);

        if(count($certificateNoArray) != 3) {
            return $certificatePrefix . 1;
        }

        return $certificatePrefix . ($certificateNoArray[2]+1);
    }

    public function getCertificateValidityDate($applicationId, $appTypeId) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');

        $appProducts = $appProductRepository->getAllByAppId($applicationId);

        $appTypes = config('app_constants.app_types');
        $certificateValidityDays = 0;

        if($appTypeId == $appTypes['PC']) {
            if($appProducts->contains('product_type_id', self::OTHER_SEEDS)) {
                $certificateValidityDays = 1;
            } else {
                $certificateValidityDays = 15;
            }
        } elseif($appTypeId == $appTypes['RO']) {
            if($appProducts->contains('product_type_id', self::OTHER_SEEDS)) {
                $certificateValidityDays = 1;
            } else {
                $certificateValidityDays = 90;
            }
        } elseif($appTypeId == $appTypes['IP']) {
            $productIds = $appProducts->whereNotNull('product_id')->pluck('product_id')->toArray();

            if(!empty($productIds)) {
                $certificateValidityDays = $productRepository->getMaxCertificateValidityDays($productIds);
            }
        }

        if(!$certificateValidityDays) {
            return null;
        }

        return Carbon::now()->addDays($certificateValidityDays)->toDateString();
    }

    public function transferApplication($data) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
        $notificationTemplateService = resolve('App\Services\NotificationTemplateService');
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');

        return DB::transaction(function() use ($applicationRepository, $appStatusLogRepository,
            $notificationRepository, $notificationTemplateService, $roDetailRepository, $processFlowRepository, $appProductRepository, $data) {

            $applicationId = $data['application_id'];

            $application = $applicationRepository->getDetails($applicationId);

            $isRestricted = $appProductRepository->hasRestrictedProduct($applicationId);

            $processFlow = $processFlowRepository->getActiveProcessFlow($application->app_type_id, $data['organization_id'], $isRestricted);

            if(!$processFlow) {
                return [
                    'success' => false,
                    'message' => 'No process flow found for ' . $isRestricted ? 'restricted products' : 'regular products'
                ];
            }

            $applicationRepository->update([
                'organization_id' => $data['organization_id'],
                'process_flow_id' => $processFlow->id,
                'current_stage' => 0,
                'current_status' => config("app_constants.app_statuses.FORWARDED"),
                'last_comment' => $data['reason']
            ], $applicationId);

            $roDetails = null;

            if($application->app_type_id == config('app_constants.app_types.RO')) {
                $roDetails = $roDetailRepository->getDetails($application->applicationable_id);
            }

            $nextAppHoldingUserId = $this->getStageUser($applicationId, 0);

            if(!$nextAppHoldingUserId) {
                return [
                    'success' => false,
                    'message' => 'No user found to forward the application'
                ];
            }

            $appStatusLogData = [
                'application_id' => $applicationId,
                'stage' => 0,
                'from_user_id' => auth()->user()->id,
                'to_user_id' => $nextAppHoldingUserId,
                'status' => config("app_constants.app_statuses.TRANSFERRED"),
                'comment' => $data['reason']
            ];

            $appStatusLogRepository->createFromPartial($appStatusLogData);

            if($roDetails) {
                $roIndex = $roDetails->memo_id ? 'RO_WITH_MEMO' : 'RO_WITH_IP';
                $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id.$roIndex");
            } else {
                $notificationUrlTemplate = config("app_constants.notification_url_templates.FORWARDED.$application->app_type_id");
            }

            $notificationUrl = str_replace('#APPLICATION_ID#',$application->id, $notificationUrlTemplate);

            $notificationRepository->createApplicationEventMessage(
                $nextAppHoldingUserId,
                $applicationId,
                config('app_constants.app_statuses.FORWARDED'),
                $notificationTemplateService->getForwardingNotification($applicationId),
                $notificationUrl
            );

            if($application->app_type_id == config('app_constants.app_types.PC')) {
                $pcDetailRepository = resolve('App\Repositories\Interfaces\PcDetailRepositoryInterface');

                $pcDetailRepository->updateByApplicationId($applicationId,[
                    'exit_organization_id' => $data['exit_entry_organization_id']
                ]);

            } elseif ($application->app_type_id == config('app_constants.app_types.IP')) {
                $ipDetailRepository = resolve('App\Repositories\Interfaces\IpDetailRepositoryInterface');

                $ipDetailRepository->updateByApplicationId($applicationId,[
                    'entry_organization_id' => $data['exit_entry_organization_id']
                ]);
            }

            $applicationRepository->update([
                'app_holding_user_id' => $nextAppHoldingUserId
            ], $applicationId);

            return [
                'success' => true,
                'message' => 'Application has been transferred successfully'
            ];
        });
    }

    public function getProcessFlowDetails($organizationId, $appTypeId) {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        $organization = $organizationRepository->getDetailWithActiveProcessFlowOnly($organizationId);

        if(!$organization) {
            return [
                'success' => false,
                'message' => 'No organization found',
            ];
        }

        if($organization->activeProcessFlows->count() == 0) {
            return [
                'success' => false,
                'message' => 'No active process flow found for the organization',
            ];
        }

        $validProcessFlow = $organization->activeProcessFlows->where('app_type_id', $appTypeId);

        if($validProcessFlow->count() == 0) {
            return [
                'success' => false,
                'message' => 'No active process flow found for the application type',
            ];
        }

        $regularProcessFlow = $validProcessFlow->where('is_restricted', 0)->first();
        $restrictProcessFlow = $validProcessFlow->where('is_restricted', 1)->first();

        $regularProcessFlowId = $regularProcessFlow ? $regularProcessFlow->id : false;
        $restrictedProcessFlowId = $restrictProcessFlow ? $restrictProcessFlow->id : false;

        $regularStartingStageUser = $regularProcessFlowId ?
            $this->getStartingStageUser($organizationId, $appTypeId, $regularProcessFlowId) : false;
        $restrictedStartingStageUser = $restrictedProcessFlowId ?
            $this->getStartingStageUser($organizationId, $appTypeId, $restrictedProcessFlowId) : false;

        return [
            'success' => true,
            'data' => [
                'process_flow_details' => [
                    'regular' => [
                        'regular_product' => $regularProcessFlowId ? true : false,
                        'can_apply' => $regularStartingStageUser ? true : false
                    ],
                    'restricted' => [
                        'restricted_product' => $restrictedProcessFlowId ? true : false,
                        'can_apply' => $restrictedStartingStageUser ? true : false
                    ]
                ]
            ]
        ];
    }
}
