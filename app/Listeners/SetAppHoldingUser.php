<?php

namespace App\Listeners;

use App\Events\AppPaymentCompleted;

class SetAppHoldingUser
{
    public function handle(AppPaymentCompleted $event)
    {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->forwardApplicationFromApplicant($event->applicationId);
    }
}
