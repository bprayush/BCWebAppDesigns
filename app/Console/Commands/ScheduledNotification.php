<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Schedule;
use Carbon\Carbon;
use App\Events\ScheduledEmailEvent;

class ScheduledNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'automate:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to teachers regarding tomorrows class';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tomorrow_day = Carbon::tomorrow()->format('D');

        $schedules = Schedule::where('day', '=', $tomorrow_day)->get();

        foreach( $schedules as $schedule)
        {
            event(new ScheduledEmailEvent($schedule, "suresh@karkhana.asia"));
        }
    }
}
