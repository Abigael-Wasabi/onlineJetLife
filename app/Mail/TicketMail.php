<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Services\TicketService;
use Illuminate\Support\Facades\Mail;

class TicketMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $bookingId;
    protected $ticketService;
    public function __construct($bookingId, TicketService $ticketService)
    {
        $this->bookingId = $bookingId;
        $this->ticketService = $ticketService;
    }


    public function build()
    {
        $pdf = $this->ticketService->generatePdf($this->bookingId);

        return $this->view('emails.ticket')
            ->attachData($pdf, 'ticket.pdf', [
                'mime' => 'application/pdf',
            ])
            ->with([
                'bookingId' => $this->bookingId,
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ticket Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ticket',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public static function sendTicketEmail($bookingId)
    {
        $ticketService = new TicketService();
        $booking = Booking::findOrFail($bookingId);
        $passengerEmail = json_decode($booking->passenger_info, true)['email'];

        Mail::to($passengerEmail)->send(new TicketMail($bookingId, $ticketService));
    }

}
