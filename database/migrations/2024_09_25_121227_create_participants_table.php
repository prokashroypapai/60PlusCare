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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('training_id')->nullable();
            $table->foreign('training_id')->references('id')->on('trainings');
            $table->unsignedBigInteger('picture_id')->nullable();
            $table->foreign('picture_id')->references('id')->on('pictures');
            $table->string('certificate_no', 15)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('email',30)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('city', 30)->nullable();
            $table->date('dob')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->boolean('is_eligible')->default(\App\Models\Activity\Participant::ELIGIBLE_NO);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
