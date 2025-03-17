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
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('event_date');                 
            $table->time('start_time')->nullable();      
            $table->time('end_time')->nullable();        
            $table->boolean('is_all_day')->default(true);
            $table->unsignedTinyInteger('type')->default(1); // 1: Personal, 2: Work, 3: Family, 4: Study, 5: Others
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
