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
        Schema::create('facility', function (Blueprint $table) {
            $table->string('facility_id', 35)->primary();
            $table->string('facility_icon', 255)->nullable();
            $table->string('facility_name', 355);
            $table->string('room_id', 35);
            $table->timestamps();

            $table->foreign('room_id')->references('room_id')->on('room')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('facility');
    }
};
