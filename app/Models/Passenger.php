<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'type',
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone_number',
        'passport_number',
        'birth_certificate_number',
        'nationality'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
