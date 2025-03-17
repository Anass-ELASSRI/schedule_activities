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
        Schema::create('activity_instances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activity_id');  // Define the user_id column first
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->date('occurrence_date');              // Date of the specific instance
            $table->time('start_time')->nullable();        // NULL if the original event is all-day
            $table->time('end_time')->nullable();          // NULL if the original event is all-day
            $table->unsignedTinyInteger('status')->nullable();
            $table->boolean('is_generated')->default(false); // True if generated by recurrence rules
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_instances');
    }
};
