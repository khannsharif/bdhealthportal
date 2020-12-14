<?php

namespace App\Mail;

use App\Models\Appointment;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PrescriptionNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $pres;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param Prescription $pres
     * @param User $user
     */
    public function __construct(Prescription $pres, User $user)
    {
        $this->pres = $pres;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->markdown('emails.prescription')->with('pres', $this->pres)->with('user', $this->user);
    }
}
