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
        Schema::create('paiments', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('avance')->nullable();
            $table->string('date_avance')->nullable();
            $table->string('reste')->nullable();
            $table->string('date_reste')->nullable();
            $table->string('recut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiments');
    }
};
