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
        // Tabel Toko Sepatu
        Schema::create('toko_sepatus', function (Blueprint $table) {
            $table->id();
            $table->string('Tipe');
            $table->string('Size');
            $table->decimal('Harga', 10, 2);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko_sepatus');
    }
};
