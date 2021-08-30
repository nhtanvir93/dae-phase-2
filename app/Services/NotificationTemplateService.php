<?php

namespace App\Services;

class NotificationTemplateService
{
    public function getApprovalNotification($applicationId, $organization) {
        $approvalTemplate = config('app_constants.notification_templates.approve');

        $notification = str_replace('#APPLICATION_ID#', $applicationId, $approvalTemplate);

        return str_replace('#ORGANIZATION#', $organization, $notification);
    }

    public function getRejectionNotification($applicationId, $organization) {
        $rejectionTemplate = config('app_constants.notification_templates.reject');

        $notification = str_replace('#APPLICATION_ID#', $applicationId, $rejectionTemplate);

        return str_replace('#ORGANIZATION#', $organization, $notification);
    }

    public function getForwardingNotification($applicationId) {
        $forwardingTemplate = config('app_constants.notification_templates.forward');

        return str_replace('#APPLICATION_ID#', $applicationId, $forwardingTemplate);
    }

    public function getBackwardingNotification($applicationId) {
        $backwardingTemplate = config('app_constants.notification_templates.backward');

        return str_replace('#APPLICATION_ID#', $applicationId, $backwardingTemplate);
    }

    public function getRecheckingNotification($applicationId, $organization) {
        $recheckingTemplate = config('app_constants.notification_templates.recheck');

        $notification = str_replace('#APPLICATION_ID#', $applicationId, $recheckingTemplate);

        return str_replace('#ORGANIZATION#', $organization, $notification);
    }
}