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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('Car_Name');
            $table->string('Car_Color');
            $table->unsignedBigInteger('Model_Id'); 
            $table->foreign('Model_Id')->references('id')->on('models')->onDelete('cascade');
            $table->timestamps();
            $table->string('Reference')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
