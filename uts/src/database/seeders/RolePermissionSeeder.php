<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Role Penjual
        $penjualRole = Role::firstOrCreate(['name' => 'Penjual']);
        $penjualPermissions = ['view_any_Pelanggan', 'view_own_Transaksi', 'view_any_Transaksi'];

        foreach ($penjualPermissions as $perm) {
            $permission = Permission::firstOrCreate(['name' => $perm]);
            $penjualRole->givePermissionTo($permission);
        }

        // Role Pembeli
        $pembeliRole = Role::firstOrCreate(['name' => 'Pembeli']);
        $pembeliPermissions = ['view_own_Transaksi', 'view_any_Transaksi', 'view_any_Toko::sepatu', 'view_Toko::sepatu'];

        foreach ($pembeliPermissions as $perm) {
            $permission = Permission::firstOrCreate(['name' => $perm]);
            $pembeliRole->givePermissionTo($permission);
        }
    }
}
