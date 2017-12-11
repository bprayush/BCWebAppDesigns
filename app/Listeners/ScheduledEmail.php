<?php

namespace App\Listeners;

use App\Events\ScheduleCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ScheduledEmail implements ShouldQueue
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
    public function handle(ScheduleCreated $event)
    {
        \Log::info("Listener");
        \Log::info($event->request);
    }
}
