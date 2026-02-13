<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use App\User;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ensure roles exist
        $superAdmin = Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'web']);
        $kafedraAdmin = Role::firstOrCreate(['name' => 'kafedra-admin', 'guard_name' => 'web']);

        // Sync users
        $users = User::whereIn('role', [1, 7])->get();

        foreach ($users as $user) {
            if ($user->role == 7) {
                $user->assignRole($superAdmin);
            } elseif ($user->role == 1) {
                $user->assignRole($kafedraAdmin);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
