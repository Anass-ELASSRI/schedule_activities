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
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->enum('frequency', ['daily', 'weekly', 'monthly', 'yearly']);
            $table->integer('interval')->default(1);               // Repeat every n days/weeks/months/years
            $table->string('days_of_week')->nullable();            // For weekly recurrence (e.g., 'MO,WE,FR')
            $table->integer('day_of_month')->nullable();           // For monthly recurrence (e.g., 15th of every month)
            $table->integer('month_of_year')->nullable();          // For yearly recurrence (e.g., 12 for December)
            $table->integer('occurrences')->nullable();            // End after n occurrences
            $table->date('end_date')->nullable();                  // End date if there's no occurrences limit
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
