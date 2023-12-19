<?php

namespace App\Providers;

use App\Events\AppointmentmailProcessed;
use App\Events\ContactmailProcessed;
use App\Events\RegistermailProcessed;
use App\Listeners\SendAppointmentmailNotification;
use App\Listeners\SendContactmailNotification;
use App\Listeners\SendRegistermailNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ContactmailProcessed::class => [
            SendContactmailNotification::class,
        ],
        AppointmentmailProcessed::class => [
            SendAppointmentmailNotification::class,
        ],
        RegistermailProcessed::class => [
            SendRegistermailNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
