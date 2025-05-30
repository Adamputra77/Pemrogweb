<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan model User sudah ada
use Illuminate\Support\Facades\Hash; // Gunakan ini untuk hashing password
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\PelangganSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\TransaksiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            PelangganSeeder::class,
            ProductSeeder::class,
            TransaksiSeeder::class,
            OrderSeeder::class,
            //OrderItemSeeder::class,
        ]);

        $this->seedUsers();
    }

    private function seedUsers(): void
{
    $usersData = [
        [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ],
        [
            'name' => 'Penjual',
            'email' => 'abc@admin.com',
            'password' => Hash::make('password'),
        ],
        [
            'name' => 'Pembeli',
            'email' => 'cde@admin.com',
            'password' => Hash::make('password'),
        ],
    ];

    foreach ($usersData as $data) {
        // Cari berdasarkan email, jika ada update, jika tidak buat baru
        $user = \App\Models\User::updateOrCreate(
            ['email' => $data['email']], // condition
            $data // data baru
        );

        // Assign role berdasarkan email
        match ($user->email) {
            'admin@admin.com' => $user->assignRole('super_admin'),
            'abc@admin.com' => $user->assignRole('Penjual'),
            default => $user->assignRole('Pembeli'),
        };
    }
}

}
