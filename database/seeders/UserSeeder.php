<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();

        $adminUser = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $superAdminUser = User::factory()->create([
            'name' => 'Super Admin User',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
        ]);

        $adminRole = $roles->where('name', 'admin')->first();
        $superAdminRole = $roles->where('name', 'super-admin')->first();

        $adminUser->roles()->attach($adminRole);
        $superAdminUser->roles()->attach($superAdminRole);
    }
}
