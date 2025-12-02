<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MoonshineAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('moonshine_users')->updateOrInsert(
            ['email' => 'admin@admin.com'], // Cambia tu email si quieres
            [
                'moonshine_user_role_id' => 1, // ADMIN
                'name' => 'Administrador',
                'password' => Hash::make('password123'), // Cambia tu contraseña
                'avatar' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
