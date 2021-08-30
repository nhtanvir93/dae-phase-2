<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use App\User;

class SendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $toUserId;
    private $subject;
    private $message;
    private $eventType;
    private $applicationId;

    public function __construct($toUserId, $subject, $message, $eventType, $applicationId = null)
    {
        $this->toUserId = $toUserId;
        $this->subject = $subject;
        $this->message = $message;
        $this->eventType = $eventType;
        $this->applicationId = $applicationId;
    }

    public function handle()
    {
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');
        $smsEmailService = resolve('App\Services\SmsEmailService');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        Auth::login(User::find(1));

        $toUser = $userRepository->getDetails($this->toUserId);

        if(!$toUser->mobile) {
            $data['status'] = config('app_constants.notification_statuses.FAILED');
            $data['request'] = null;
            $data['response'] = null;
        } else {
            $result = $smsEmailService->sendSms($toUser->mobile, $this->message);
            $data['status'] = $result['success'] ?
                config('app_constants.notification_statuses.SUCCESSFULL') : config('app_constants.notification_statuses.FAILED');
            $data['request'] = isset($result['request']) ? $result['request'] : null;
            $data['response'] = isset($result['response']) ? $result['response'] : null;
        }

        $data['subject'] = $this->subject;
        $data['message'] = $this->message;
        $data['type'] = config('app_constants.notification_types.SMS');
        $data['to'] = $toUser->id;
        $data['event_type'] = $this->eventType;
        $data['application_id'] = $this->applicationId;

        try {
            $smsEmailLogRepository->create($data);
        } catch (QueryException $exception) {
            $this->fail($exception);
        }
    }
}
