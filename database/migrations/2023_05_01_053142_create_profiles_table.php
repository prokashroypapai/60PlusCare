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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('alternate_no', 15)->nullable();
            $table->string('id_type', 30)->nullable();
            $table->string('id_no', 20)->nullable();
            $table->date('dob')->nullable();
            $table->string('gender',6)->nullable();
            $table->string('marital_status', 10)->nullable();
            $table->string('spouse_name', 30)->nullable();
            $table->date('spouse_dob')->nullable();
            $table->tinyInteger('children_no')->nullable();
            $table->date('anniversary_date')->nullable();
            $table->string('address', 191)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('pin_code', 6)->nullable();
            $table->string('police_station', 15)->nullable();
            $table->string('gmail_id', 30)->nullable();
            $table->string('facebook_id', 191)->nullable();
            $table->string('staying_with', 10)->nullable();
            $table->string('location_type', 30)->nullable();
            $table->string('security_available', 30)->nullable();
            $table->string('blood_group', 3)->nullable();
            $table->string('medical_condition', 191)->nullable();
            $table->text('hospitalization_history')->nullable();
            $table->text('personal_doctor_details')->nullable();
            $table->string('sponsored_by', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
