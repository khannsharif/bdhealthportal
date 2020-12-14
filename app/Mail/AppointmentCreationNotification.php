<?php

namespace App\Mail;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class AppointmentCreationNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $app;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param Appointment $app
     * @param User $user
     */
    public function __construct(Appointment $app, User $user)
    {
        $this->app = $app;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->from('example@example.com')->view('emails.newuser');
        //return $this->view('emails.appointment');
        return $this->markdown('emails.appointment')->with('app', $this->app)->with('user', $this->user);
    }
}
