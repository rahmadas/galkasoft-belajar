<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Polyfill\Intl\Idn\Idn;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('projects', function (Blueprint $table) {

            $table->id('id', 11);
            $table->foreignId('client_id', 11)->constrained();
            $table->string('name', 100);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('clients');
    }
};
