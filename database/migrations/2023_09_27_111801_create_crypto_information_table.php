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
        Schema::create('crypto_information', function (Blueprint $table) {
            $table->id();
            $table->string('ar_about')->nullable();
            $table->string('en_about')->nullable();
            $table->string('ar_location')->nullable();
            $table->string('en_location')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('twitter1')->nullable();
            $table->string('twitter2')->nullable();
            $table->string('telegram1')->nullable();
            $table->string('telegram2')->nullable();
            $table->string('telegram3')->nullable();
            $table->string('youtube')->nullable();
            $table->string('logo')->nullable();
            $table->string('en_name')->nullable();
            $table->string('ar_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_information');
    }
};
