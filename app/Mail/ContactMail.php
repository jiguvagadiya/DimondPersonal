<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        // $data will be the Contact model instance
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Contact US - ' . $this->data->subject)
                    ->view('emails.contact')
                    ->with([
                        'name'    => $this->data->name,
                        'email'   => $this->data->email,
                        'phone'   => $this->data->phone,
                        'message' => $this->data->message,
                    ]);
    }
}
