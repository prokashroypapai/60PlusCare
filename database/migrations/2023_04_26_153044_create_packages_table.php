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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name', 100)->nullable();
            $table->string('package_slug', 100)->nullable();
            $table->float('package_price', 10,2)->nullable();
            $table->string('package_price_duration', 5)->nullable();
            $table->longText('package_details')->nullable();
            $table->text('package_summary')->nullable();
            $table->integer('num_days')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
