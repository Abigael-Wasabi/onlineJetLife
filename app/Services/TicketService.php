<?php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Booking;

class TicketService
{
    public function generatePdf($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $bookingDetails = json_decode($booking->booking_info, true);

        $data = [
            'passenger' => $bookingDetails['passenger_info'],
            'flight' => $bookingDetails['flight_details'],
            'booking' => [
                'reference' => $booking->id,
                'status' => $booking->status,
            ],
            'itinerary' => $bookingDetails['flight_details']['itinerary'],
            'services' => $bookingDetails['additional_services'] ?? [],
        ];

        $pdf = Pdf::loadView('emails.ticket', $data);
        return $pdf->output();
    }
}
