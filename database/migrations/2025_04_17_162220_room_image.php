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
        Schema::create('room_image', function (Blueprint $table) {
            $table->string('ri_id', 35)->primary();
            $table->string('ri_image', 255);
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
        Schema::drop('room_image');
    }
};
