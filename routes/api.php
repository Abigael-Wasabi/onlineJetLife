<?php

use App\Http\Controllers\Flights\AirlineSearchController;
use App\Http\Controllers\Flights\AirportSearchController;
use App\Http\Controllers\Flights\FlightOrderController;
use App\Http\Controllers\Flights\FlightSearchController;
use App\Http\Controllers\Flights\BookingController;
use App\Http\Controllers\Flights\PriceSummaryController;
use App\Http\Controllers\Flights\MpesaController;
use App\Models\FlightsSearchModel;
use App\Http\Controllers\Flights\SeatController;
use App\Http\Controllers\Tours\DestinationController;
use App\Http\Controllers\Cars\CarsTransfersController;
use Illuminate\Support\Facades\Route;

//airports
Route::prefix('airports')->group(function () {
    Route::get('/all', [AirportSearchController::class, 'index']);
    Route::get('/search', [AirportSearchController::class, 'search']);
    Route::get('/nearest', [FlightsSearchModel::class, 'getLocationBasedOnIP']);
});
//airlines
Route::prefix('airlines')->group(function () {
    Route::get('/search', [AirlineSearchController::class, 'search']);
});
//flights
Route::prefix('flights')->group(function () {
    Route::get('search/{any}', [FlightSearchController::class, 'search'])->where('any', '.*');
    Route::get('/offers', [FlightSearchController::class, 'offers']);
    Route::post('/offers-price', [FlightSearchController::class, 'flightOffersPrice']);
    Route::get('/seat-map', [SeatController::class, 'getSeatMap']);
//    Route::post('/confirm-offers-price', [FlightSearchController::class, 'confirmFlightOfferPrice']);
    Route::post('/select-flight-offer', [FlightSearchController::class, 'selectFlightOffer']);
    Route::get('/retrieve-flight-order/{flightOrderId}', [FlightOrderController::class, 'retrieve']);
    Route::delete('/cancel-flight-order/{flightOrderId}', [FlightOrderController::class, 'cancel']);
    Route::get('/select-seat', [SeatController::class, 'selectSeat']);
});
//bookings
Route::prefix('booking')->group(function () {
    Route::post('/store', [BookingController::class, 'store']);
    Route::get('/price-summary/{bookingId}', [PriceSummaryController::class, 'priceSummary']);
    Route::get('/send-ticket/{bookingId}', [PriceSummaryController::class, 'sendTicket']);
});
//payments
Route::prefix('pay')->group(function () {
    Route::post('/mpesa/initiate', [MpesaController::class, 'initiatePayment']);
    Route::post('/mpesa/callback', [MpesaController::class, 'callback']);
});
//tours n destinations
Route::prefix('destination-experience')->group(function () {
    Route::get('/points-of-interest', [DestinationController::class, 'PointsOfInterest']);
    Route::get('/points-of-interest-by-square', [DestinationController::class, 'PointsOfInterestBySquare']);
    Route::get('/points-of-interest-by-id/{poisId}', [DestinationController::class, 'PointsOfInterestById']);
    Route::get('/tours-and-activities', [DestinationController::class, 'getToursAndActivities']);
    Route::get('/tours-and-activities-by-bounding-box', [DestinationController::class, 'getToursAndActivitiesByBoundingBox']);
    Route::get('/tours-and-activities-by-id/{activityId}', [DestinationController::class, 'getToursAndActivitiesById']);
    Route::get('/city-search', [DestinationController::class, 'searchCity']);
});
//cars n transfers
Route::prefix('cars-and-transfers')->group(function () {
    Route::post('/search', [CarsTransfersController::class, 'transferSearch']);
    Route::post('/booking', [CarsTransfersController::class, 'bookingTransfer']);
    Route::post('/management/{orderId}/transfers/cancellation', [CarsTransfersController::class, 'transferManagement']);
});
