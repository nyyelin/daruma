<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*dd($this->details['email']);*/
     /*   return $this->subject('Contact Message')->view('emails.ContactMail');*/
      return $this->from($this->details['email'])->subject('Student registered success!')->view('emails.ContactMail')->with('data',$this->details);

    }
}
