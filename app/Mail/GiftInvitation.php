<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GiftInvitation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(): GiftInvitation
    {
        return $this->view('emails.gift')->with('data', $this->data);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'A Little Gift from Me to You',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'app.gift.gift-email',
        );
    }
}
