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
        Schema::create('app_parameters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->foreignId('parameter_type_id')->references('id')->on('parameter_types');
            $table->string('value', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_parameters');
    }
};
