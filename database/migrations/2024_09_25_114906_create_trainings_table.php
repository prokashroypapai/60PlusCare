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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('picture_id')->nullable();
            $table->foreign('picture_id')->references('id')->on('pictures');
            $table->string('training_title', 191);
            $table->string('training_slug', 191);
            $table->longText('training_details')->nullable();
            $table->text('training_rules')->nullable();
            $table->string('training_location', 191);
            $table->date('training_date')->nullable();
            $table->timestamp('date_expiry')->nullable();
            $table->boolean('is_expired')->default(false);
            $table->boolean('status')->default(\App\Models\Activity\Training::STATUS_ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
