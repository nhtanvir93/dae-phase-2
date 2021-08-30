<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class PasswordResetRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $clientAppUrl;
    public $changePasswordUrl;

    public function __construct($token)
    {
        $this->token = $token;
        $this->clientAppUrl = config('app_constants.clientAppUrl') . '/login';
        $this->changePasswordUrl = config('app_constants.clientAppUrl') . '/reset-password/' . $this->token;
    }

    public function build()
    {
        return $this->subject('Reset Password for DAE Application System')->view('emails.password.reset');
    }
}
