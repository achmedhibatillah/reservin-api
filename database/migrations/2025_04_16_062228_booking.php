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
        Schema::create('booking', function (Blueprint $table) {
            $table->string('booking_id', 35)->primary();
            $table->string('customer_id', 35);
            $table->string('room_id', 35);
            $table->string('booking_code', 20);
            $table->date('booking_date');
            $table->time('booking_start');
            $table->time('booking_end');
            $table->string('booking_desc', 350);
            $table->bigInteger('booking_price');
            $table->integer('booking_status');
            $table->timestamps();

            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
            $table->foreign('room_id')->references('room_id')->on('room')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        SChema::drop('booking');
    }
};
