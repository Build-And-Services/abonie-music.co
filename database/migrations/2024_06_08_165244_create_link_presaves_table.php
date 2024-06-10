<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('link_presaves', function (Blueprint $table) {
            $table->id();
            $table->string('button_text')->nullable();
            $table->string('link')->nullable();
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('presave_id');
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->foreign('presave_id')->references('id')->on('presaves')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_presaves');
    }
};
