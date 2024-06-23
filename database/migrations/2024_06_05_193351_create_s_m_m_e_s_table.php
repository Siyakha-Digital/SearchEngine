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
        Schema::create('s_m_m_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan'); // Adding the slogan field
            $table->string('image'); // Adding the image field
            $table->json('category');
            $table->longText('description');
            $table->string('location');
            $table->string('contact_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_m_m_e_s');
    }
};
