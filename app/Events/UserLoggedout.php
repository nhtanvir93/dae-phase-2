<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserLoggedout
{
    use Dispatchable, SerializesModels;

    public $userId;
    public $hasLeftChannelManually;

    public function __construct($userId, $hasLeftChannelManually = false)
    {
        $this->userId = $userId;
        $this->hasLeftChannelManually = $hasLeftChannelManually;
    }
}
