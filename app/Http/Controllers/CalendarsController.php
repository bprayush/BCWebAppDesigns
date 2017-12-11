<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use App\Events\ScheduleCreated;

class CalendarsController extends Controller
{

    public function createEvent()
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

   //  public function setEvents(Request $request)
   //  {

   //      $this->validate($request, [
   //          'school' => 'required',
   //          'teacher' => 'required',
   //          'class' => 'required',
   //          'content' => 'required',
   //          'startdate' => 'required',
   //          'enddate' => 'required',
   //          'day' => 'required',
   //          'starttime' => 'required',
   //          'endtime' => 'required',
   //          'email' => 'required'
   //      ]);

   //      $startDate = Carbon::parse($request->startdate.' '.$request->starttime, "Asia/Kathmandu");
   //      $endDate = Carbon::parse($request->startdate.' '.$request->endtime, "Asia/Kathmandu");
   //      $futureDate = Carbon::parse($request->enddate.' '.$request->endtime, "Asia/Kathmandu");

   //      if( $startDate->dayOfWeek === Carbon::parse($request->day)->dayOfWeek )
   //  	   $startDate = $startDate;
   //      else
   //      {
   //          while( $startDate->dayOfWeek !== Carbon::parse($request->day)->dayOfWeek )
   //          {
   //              $startDate = $startDate->addDays(1);
   //              $endDate = $endDate->addDays(1);
   //          }
   //      }

   //  	$recursion_end_date = (string)$futureDate->year . (string)$futureDate->month . (string)$futureDate->day; 

   //  	$recurrence_rule = "RRULE:FREQ=WEEKLY;UNTIL=".$recursion_end_date;

   //  	while( $endDate <= $futureDate )
   //  	{
	  //   	$event = new Event;
	  //   	$event->name = "New Test Event";
	  //   	$event->startDateTime = $startDate;
			// $event->endDateTime = $endDate;
			// $event->description = "This day is going to be awesome!";
	  //   	$event->setRecurrence = array($recurrence_rule);
   //          $event->addAttendee(['email' => 'prayushbijukchh@gmail.com']);
	  //   	$event->reminders = [
   //              'useDefault' => FALSE,
   //              'overrides' => [
   //                    ['method' => 'email', 'minutes' => 24 * 60],
   //                    ['method' => 'popup', 'minutes' => 10],
   //                  ]
   //          ];

   //          $startDate->addDays(7);
	  //   	$endDate->addDays(7);


   //  		$event->save();
   //  	}
   //  }

    public function setEvents(Request $request)
    {
        dd(event(new ScheduleCreated($request)));
    }

    public function getEvents()
    {
        $event = Event::get();
        dd($event);
    }

    public function deleteEvents()
    {
        $events = Event::get();
        //dd($events);
        foreach( $events as $event )
            $event->delete();
    }

}
