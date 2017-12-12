<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ManualEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    private $request;
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // $data = $this->request;
        // $date = Carbon::parse($data->startdate);
        //dd($data);

        $data = [
            'teacher' => 'Prof. Suresh Ghimire',
            'school' => 'Doto School',
            'starttime' => '2:00 am',
            'endtime' => '12:00 am',
            'class' => 'Advanced Science',
            'content' => 'Quantum Physics'
        ];

        $date = Carbon::tomorrow();

        return (new MailMessage)
            ->subject('School Notification')
            ->view('admin.notification.email', compact('data', 'date'));

        // return (new MailMessage)
        //     ->subject('School Notification')
        //     ->view('admin.notification.bootstrapTest');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
