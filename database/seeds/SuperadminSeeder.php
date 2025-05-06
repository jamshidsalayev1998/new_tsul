<?php

use App\User;
use Illuminate\Database\Seeder;

class SuperadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newSuperadmin = User::create([
            'name' => 'Superadmin',
            'username' => 'super3322',
            'email' => 'd',
            'password' => Hash::make('123456'),
            'role' => 7
        ]);
    }
}
