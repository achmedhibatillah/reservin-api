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
        Schema::create('admin', function (Blueprint $table) {
            $table->string('admin_id', 35)->primary();
            $table->string('admin_fullname', 255);
            $table->string('admin_email', 255)->unique();
            $table->string('admin_pass', 255);
            $table->integer('admin_who');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('admin');
    }
};
