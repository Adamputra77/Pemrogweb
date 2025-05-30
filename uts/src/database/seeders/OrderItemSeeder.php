<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Misal order_id dan product_id sudah ada di database
        foreach (range(1, 10) as $i) {
            OrderItem::create([
                'order_id' => rand(1, 10), // Pastikan order dengan ID ini ada
                'product_id' => rand(1, 5), // Pastikan produk dengan ID ini ada
                'quantity' => rand(1, 3),
                'price' => rand(50000, 300000),
            ]);
        }
    }
}
