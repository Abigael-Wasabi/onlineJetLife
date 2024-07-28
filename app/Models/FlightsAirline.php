<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightsAirline extends Model
{
    use HasFactory;

    protected $table = 'flights_airlines';

    protected $fillable = [
        'name',
        'code',
        'iata',
        'sign',
        'country',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
