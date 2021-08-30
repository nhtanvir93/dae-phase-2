<?php

namespace App\Listeners;

use App\Events\AppPaymentCompleted;

class SetActiveProcessFlow
{
    public function handle(AppPaymentCompleted $event)
    {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->setAppProcessFlow($event->applicationId);
    }
}
