<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\AppPaymentCompleted;
use App\Listeners\SetActiveProcessFlow;
use App\Listeners\SetAppHoldingUser;
use App\Listeners\ApplicationProcessEventSubscriber;
use App\Models\Profile;
use App\Observers\ProfileObserver;
use App\Models\Notification;
use App\Observers\NotificationObserver;
use App\Events\UserLoggedout;
use App\Listeners\UpdateUserLogHistory;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        AppPaymentCompleted::class => [
            SetActiveProcessFlow::class,
            SetAppHoldingUser::class
        ],
        UserLoggedout::class => [
            UpdateUserLogHistory::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Profile::observe(ProfileObserver::class);
        Notification::observe(NotificationObserver::class);
    }

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        ApplicationProcessEventSubscriber::class,
    ];
}
