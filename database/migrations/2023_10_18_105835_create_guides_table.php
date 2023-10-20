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
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('ar_name')->nullable();
            $table->string('image_major')->nullable();
            $table->longText('en_glance')->nullable();
            $table->longText('ar_glance')->nullable();
            $table->longText('en_registration_mechanism')->nullable();
            $table->longText('ar_registration_mechanism')->nullable();
            $table->longText('en_play_mechanism')->nullable;
            $table->longText('ar_play_mechanism')->nullable();
            $table->string('tele1')->nullable();
            $table->string('tele2')->nullable();
            $table->string('tele3')->nullable();
            $table->string('tele4')->nullable();
            $table->string('twitter')->nullable();
            $table->string('link')->nullable();
            $table->string('discord')->nullable();
            $table->string('slug')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
