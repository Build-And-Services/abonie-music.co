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
        Schema::create('biolinks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('name_size')->default('text-base');
            $table->string('name_weight')->default('font-normal');
            $table->string('photo');
            $table->string('photo_radius')->nullable();
            $table->string('link');
            $table->string('background')->default('#fff');
            $table->string('background_image')->nullable();
            $table->string('color')->default('#000');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biolinks');
    }
};
