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
        Schema::create('style_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biolink_id');
            $table->string('background')->default('#fff');
            $table->string('text_color')->default('#000');
            $table->integer('padding_top')->default(4);
            $table->integer('padding_bottom')->default(4);
            $table->integer('padding_left')->default(6);
            $table->integer('padding_right')->default(6);
            $table->integer('gap')->default(6);
            $table->string('border_radius')->nullable();
            $table->integer('shadow_horizontal')->default(4);
            $table->integer('shadow_vertical')->default(4);
            $table->integer('shadow_blur')->default(4);
            $table->integer('shadow_color')->default(4);
            $table->string('border_radius_icon')->default('rounded-full');
            $table->foreign('biolink_id')->references('id')->on('biolinks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('style_links');
    }
};
