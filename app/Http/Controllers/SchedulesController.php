<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;

class SchedulesController extends Controller
{

	public function create()
	{
		return view('admin.schedule.create');
	}

    public function sendManualNotification(Request $request)
    {
        Notification::route('mail', $request->email)
                        ->notify(new \App\Notifications\ManualEmailNotification($request));

        //return view('admin.notification.email');
        //return view('admin.notification.success');
    }
}
