<?php

namespace App\Mail;

use App\Helpers\LogoHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminConsultationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Make data available to the view

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $data['logo'] = LogoHelper::getBase64Logo();

        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Consultation Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.admin.consultation',
            with: ['data' => $this->data],
        );
    }

    /**
     * Get any attachments (optional).
     */
    public function attachments(): array
    {
        return [];
    }
}
