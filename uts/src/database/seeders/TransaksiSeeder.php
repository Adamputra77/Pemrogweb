<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\TokoSepatu;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        $pelanggan = Pelanggan::first();
        $sepatu = TokoSepatu::first();

        if ($pelanggan && $sepatu) {
            Transaksi::create([
                'pelanggan_id' => $pelanggan->id,
                'sepatu_id' => $sepatu->id,
                'Jumlah' => 2,
                'Total_Harga' => $sepatu->Harga * 2,
            ]);
        } else {
            $this->command->info('Pelanggan atau Sepatu belum ada. Harap seed data sebelumnya.');
        }
    }
}
