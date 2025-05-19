<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TokoSepatu;

class TokoSepatuSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        TokoSepatu::insert([
            ['Tipe' => 'Nike', 'Size' => '42', 'Harga' => 2000000],
            ['Tipe' => 'Adidas', 'Size' => '41', 'Harga' => 2000000],
        ]);
    }
}
