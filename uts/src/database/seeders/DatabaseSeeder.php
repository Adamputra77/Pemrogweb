<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan ini diimpor

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            TokoSepatuSeeder::class,
            PelangganSeeder::class,
            TransaksiSeeder::class
        ]);

        $this->seedUsers(); // Panggil fungsi untuk seed pengguna
    }

    private function seedUsers(): void
    {
        $users = User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Penjual',
                'email' => 'abc@admin.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Pembeli',
                'email' => 'cde@admin.com',
                'password' => bcrypt('password'),
            ],
        ]);

        foreach ($users as $user) {
            if ($user->email == 'admin@admin.com') {
                $user->assignRole('super_admin');
            }elseif($user->email == 'abc@admin.com'){
                $user->assignRole('Penjual');
            }else{
                $user->assignRole('Pembeli');
            }
        }
    }
}
