<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ApplicationApproved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $applicationId;
    public $comment;

    public function __construct($applicationId, $comment)
    {
        $this->applicationId = $applicationId;
        $this->comment = $comment;
    }
}
