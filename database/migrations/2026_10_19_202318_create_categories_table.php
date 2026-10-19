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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');                      // ক্যাটাগরির নাম (যেমন: ইলেকট্রনিক্স)
            $table->string('slug')->unique();            // ইউনিক স্লাগ (যেমন: electronics)
            $table->string('icon')->nullable();          // ফন্টঅসম আইকন ক্লাস (যেমন: fa-solid fa-plug)
            $table->enum('status', ['active', 'inactive'])->default('active'); // স্ট্যাটাস
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
