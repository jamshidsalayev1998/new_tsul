<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrCreate(['name' => 'super-admin']);

        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'password' => Hash::make('password'),
                'role' => 7 // Keep legacy role for backward compatibility
            ]
        );

        $superAdmin->assignRole($role);
    }
}
