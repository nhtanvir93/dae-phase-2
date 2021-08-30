<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AppPaymentCompleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $applicationId;

    public function __construct($applicationId)
    {
        $this->applicationId = $applicationId;
    }
}
