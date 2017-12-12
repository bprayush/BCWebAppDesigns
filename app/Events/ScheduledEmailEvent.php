<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ScheduledEmailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $request;
    public $email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($request, $email)
    {
        $this->request = $request;
        $this->email = $email;
        // \Log::info("Inside events");
        // \Log::info($request);
    }
}
