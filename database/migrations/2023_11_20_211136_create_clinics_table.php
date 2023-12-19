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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('picture_id')->nullable();
            $table->foreign('picture_id')->references('id')->on('pictures');
            $table->string('clinic_name', 20)->nullable();
            $table->string('clinic_slug', 20)->nullable();
            $table->string('clinic_address', 255)->nullable();
            $table->text('clinic_description')->nullable();
            $table->text('clinic_map')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
