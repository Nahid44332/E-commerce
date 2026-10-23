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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('brand')->nullable();
            $table->string('sku')->unique();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            
            // Pricing & Stock
            $table->decimal('cost_price', 10, 2);
            $table->decimal('price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->integer('discount_percent')->nullable(); // অটো পার্সেন্টেজ সেভ রাখতে
            $table->integer('stock_qty')->default(0);

            // Organization
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('sub_category_id')->nullable()->constrained('sub_categories')->onDelete('set null');

            // Badges & Status
            $table->string('badge')->nullable(); // Hot, New, Best, Trending
            $table->enum('status', ['active', 'inactive'])->default('active');

            // Images
            $table->string('image');
            $table->json('gallery_images')->nullable(); // multiple images json format
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
