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
        Schema::create('pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_title', 191)->nullable();
            $table->string('image_alt', 191)->nullable();
            $table->string('image_full', 191)->nullable();
            $table->string('image_thumb', 191)->nullable();
            $table->string('image_small', 191)->nullable();
            $table->boolean('is_default')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
