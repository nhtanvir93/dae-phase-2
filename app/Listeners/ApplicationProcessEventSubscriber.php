<?php

namespace App\Listeners;

class ApplicationProcessEventSubscriber
{
    public function handleApproval($event) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->approveApplication($event->applicationId, $event->comment);
    }

    public function handleRejection($event) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->rejectApplication($event->applicationId, $event->comment);
    }

    public function handleRechecking($event) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->recheckApplication($event->applicationId, $event->comment);
    }

    public function handleForwarding($event) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->forwardApplication($event->applicationId, $event->comment);
    }

    public function handleBackwarding($event) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->backwardApplication($event->applicationId, $event->comment);
    }

    public function handleApplicationUpdatedAfterRecheck($event) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        return $processFlowService->applicationUpdatedAfterRecheck($event->applicationId);
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\ApplicationApproved',
            [ApplicationProcessEventSubscriber::class, 'handleApproval']
        );

        $events->listen(
            'App\Events\ApplicationRejected',
            [ApplicationProcessEventSubscriber::class, 'handleRejection']
        );

        $events->listen(
            'App\Events\ApplicationRechecked',
            [ApplicationProcessEventSubscriber::class, 'handleRechecking']
        );

        $events->listen(
            'App\Events\ApplicationForwarded',
            [ApplicationProcessEventSubscriber::class, 'handleForwarding']
        );

        $events->listen(
            'App\Events\ApplicationBackwarded',
            [ApplicationProcessEventSubscriber::class, 'handleBackwarding']
        );

        $events->listen(
            'App\Events\ApplicationUpdatedAfterRecheck',
            [ApplicationProcessEventSubscriber::class, 'handleApplicationUpdatedAfterRecheck']
        );
    }
}