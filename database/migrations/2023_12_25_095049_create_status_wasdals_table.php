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
        Schema::create('status_wasdals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wasdal_id')->nullable();
            $table->foreign('wasdal_id')->references('id')->on('wasdals');

            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_wasdals');
    }
};
