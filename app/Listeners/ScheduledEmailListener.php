<?php

namespace App\Listeners;

use App\Events\ScheduledEmailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;

class ScheduledEmailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ScheduleCreated  $event
     * @return void
     */
    public function handle(ScheduledEmailEvent $event)
    {
        // \Log::info("Inside Listener");
        // \Log::info($event->request);
        // \Log::info($event->email);
        Notification::route('mail', $event->email)
                        ->notify(new \App\Notifications\ManualEmailNotification($event->request));
    }
}
