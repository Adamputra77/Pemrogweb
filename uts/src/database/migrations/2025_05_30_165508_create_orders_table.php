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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique(); // INV-20240601-001
            $table->foreignId('user_id')->nullable()->constrained();
            $table->decimal('total_price', 12, 2);
            $table->string('payment_method'); // qris, bank_transfer, etc
            $table->string('payment_status')->default('pending');
            $table->text('shipping_address');
            $table->string('size'); // Ukuran yang dipilih
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
