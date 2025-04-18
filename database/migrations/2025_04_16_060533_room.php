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
        Schema::create('room', function (Blueprint $table) {
            $table->string('room_id', 35)->primary();
            $table->string('room_name', 100);
            $table->text('room_desc')->nullable();
            $table->string('room_kategori', 255);
            $table->integer('room_capacity');
            $table->bigInteger('room_price');
            $table->integer('room_available');
            $table->time('room_start');
            $table->time('room_end');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('room');
    }
};
