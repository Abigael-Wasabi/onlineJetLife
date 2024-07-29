<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('recipient@example.com')
            ->subject('Test Email');
    });

    return 'Email sent!';
});
