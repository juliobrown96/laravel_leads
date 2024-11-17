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
        Schema::create('customer_business_warranties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('customer_business_id')->references('id')->on('customer_businesses')->onDelete('cascade');
            $table->boolean('status')->default(true);
            $table->text('user_response');
            $table->text('business_info');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('registered_at');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_business_warranties');
    }
};
