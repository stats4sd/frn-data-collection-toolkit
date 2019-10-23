<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormSubmitted extends Mailable
{
    public $info;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        //
        $this->info = $contact;
    }

    /**
     * Build the contact.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->info->email)->subject('FRN Info Platform - New Message')->markdown('mail.contactform');
    }
}
