<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        Pelanggan::insert([
            [
                'Nama' => 'Yodan Surya Adhe',
                'Alamat' => 'Jl. Telaga Bestari No. 15',
                'Telepon' => '081234567890',
            ],
            [
                'Nama' => 'Zhafir Daffa Agnawan',
                'Alamat' => 'Jl. Sudirman Indah No. 16',
                'Telepon' => '082345678901',
            ],
        ]);
    }
}
