<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormSubmitted extends Mailable
{
    public $contact;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Build the contact.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contact->email)->subject('FRN Info Platform - New Message ( ' . $this->contact->purpose . ' )')->markdown('mail.contactform');
    }
}
