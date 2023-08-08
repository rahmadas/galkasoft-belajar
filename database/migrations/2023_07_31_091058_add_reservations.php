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
        //
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            // $table->unsignedBigInteger('car_id');
            // $table->foreign('car_id')->references('id')->on('cars');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
