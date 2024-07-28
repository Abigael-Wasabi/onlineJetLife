<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->string('type');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('phone_number');
            $table->string('passport_number')->nullable(); // Nullable for children/infants
            $table->string('birth_certificate_number')->nullable();
            $table->string('nationality');
            $table->timestamps();

            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
