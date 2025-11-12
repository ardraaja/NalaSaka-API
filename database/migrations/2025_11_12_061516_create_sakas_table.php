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
        Schema::create('sakas', function (Blueprint $table) {
        $table->id();
        $table->string('name');             // SakaItem.name
        $table->text('description');        // SakaItem.description
        $table->string('photo_url');        // SakaItem.photoUrl
        $table->integer('price');           // SakaItem.price
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sakas');
    }
};
