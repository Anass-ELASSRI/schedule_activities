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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Define the user_id column first
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('event_date');                 
            $table->time('start_time')->nullable();      
            $table->time('end_time')->nullable();        
            $table->boolean('is_all_day')->default(true);
            $table->unsignedTinyInteger('type'); // personal, work, family, study, others
            $table->unsignedTinyInteger('category'); // task OR event
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
