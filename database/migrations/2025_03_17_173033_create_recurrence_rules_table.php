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
        Schema::create('recurrence_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activity_id');  // Define the user_id column first
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->unsignedTinyInteger('frequency'); // daily, weekly, monthly, yearly, period, periods
            $table->integer('interval')->default(1);      
            $table->string('rule')->nullable();           
            $table->integer('occurrences')->nullable();            
            $table->date('end_date')->nullable();                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurrence_rules');
    }
};
