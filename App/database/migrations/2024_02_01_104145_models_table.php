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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string('Model_Name');
            $table->string('Model_Year');
            $table->unsignedBigInteger('cars_id'); 
            $table->foreign('cars_id')->references('id')->on('cars')->onDelete('cascade');
            $table->timestamps();
            $table->rememberToken();
            $table->string('Reference')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
