<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luggage extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'type',
        'weight_in_kg',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}




