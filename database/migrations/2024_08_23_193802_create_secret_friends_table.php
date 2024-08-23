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
        Schema::create('secret_friends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gifs_id')->references('id')->on('friends')->onDelete('cascade');
            $table->foreignId('recivers_id')->references('id')->on('friends')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secret_friends');
    }
};
