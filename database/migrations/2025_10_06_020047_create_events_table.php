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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('occasion')->nullable();
            $table->text('description');
            $table->text('summary')->nullable();
            $table->date('event_date');
            $table->string('main_image');
            $table->json('gallery_images')->nullable(); // for multiple images
            $table->string('classes_involved')->nullable(); // can store comma-separated or JSON later
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
