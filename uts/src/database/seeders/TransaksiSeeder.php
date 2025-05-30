<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            Transaksi::create([
                'Jumlah' => rand(1, 5),
                'Total_Harga' => rand(50000, 1000000),
            ]);
        }
    }
}

