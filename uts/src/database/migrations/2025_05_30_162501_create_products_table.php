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
            $table->string('name'); // Contoh: "Sneakers Casual"
            $table->string('slug')->unique(); // Contoh: "sneakers-casual"
            $table->text('short_desc')->nullable(); // Deskripsi singkat
            $table->decimal('price', 12, 2); // 499000.00
            $table->json('sizes')->nullable(); // ['36','37','38','39','40','41','42']
            $table->string('image')->nullable(); // sneakers.jpg
            $table->string('category'); // "Sneakers", "Formal"
            $table->boolean('is_active')->default(true);
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