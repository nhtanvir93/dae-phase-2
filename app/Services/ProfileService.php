<?php

namespace App\Services;

class ProfileService
{
    public function isProfileCompleted($userId) {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');
        $profileRepository = resolve('App\Repositories\Interfaces\ProfileRepositoryInterface');
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $profile = $profileRepository->getDetails($userId);

        if($userRepository->isAdmin($userId) || $userRepository->isDAEAdmin($userId)) {
            return true;
        }

        if(!$profile && $userRepository->isDaeOfficial($userId)) {
            return false;
        } elseif ($profile && $userRepository->isDaeOfficial($userId)) {
            return true;
        }

        $profileConfigAttachments = $configAttachmentRepository->getProfileEligible();
        $userAttachments = $userAttachmentRepository->getProfileAttachments($userId);

        $requiredProfileAttachments = $profileConfigAttachments->where('is_mandatory_for_profile', 1);

        if($requiredProfileAttachments->count() == 0 && $profile) {
            return true;
        } elseif ($requiredProfileAttachments->count() == 0 && !$profile) {
            return false;
        }

        $requiredConfigAttachmentIds = $requiredProfileAttachments->pluck('id')->toArray();
        $userConfigAttachmentIds = $userAttachments->pluck('config_attachment_id')->toArray();

        $commonConfigAttachmentIds = array_intersect($requiredConfigAttachmentIds, $userConfigAttachmentIds);

        if(count($commonConfigAttachmentIds) == count($requiredConfigAttachmentIds) && $profile) {
            return true;
        } else {
            return false;
        }
    }
}