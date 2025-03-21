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
            $table->string('rule')->nullable();           
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
