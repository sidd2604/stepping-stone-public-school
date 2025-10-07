<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminApprovalMail extends Mailable
{
    use Queueable, SerializesModels;

    public $admin;

    public $approveUrl;

    /**
     * Create a new message instance.
     */
    public function __construct(User $admin)
    {
        $this->admin = $admin;
        $this->approveUrl = url('/approve-admin/'.$admin->approval_token);
    }

    /**
     * Define the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Admin Registration Request',
        );
    }

    /**
     * Define the message content.
     */
    public function content(): Content
    {
        return new Content(
            view: 'pages.email.adminApproval',
            with: [
                'admin' => $this->admin,
                'approveUrl' => $this->approveUrl,
            ],
        );
    }

    /**
     * Attachments (optional)
     */
    public function attachments(): array
    {
        return [];
    }
}
