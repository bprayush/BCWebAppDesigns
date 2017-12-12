<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Notification;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SchedulesController extends Controller
{

	public function create()
	{
        $d = Carbon::parse("Sunday");
        $days = array();

        for( $i=0; $i<7; $i++ )
        {
            array_push($days, $d->format('D'));
            $d = $d->addDays(1);
        }
		return view('admin.schedule.create', compact('days'));
	}

    public function sendManualNotification(Request $request)
    {
        Notification::route('mail', $request->email)
                        ->notify(new \App\Notifications\ManualEmailNotification($request));

        //return view('admin.notification.email');
        //return view('admin.notification.success');
    }
}
