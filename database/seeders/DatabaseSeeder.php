<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MoonshineAdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('moonshine_users')->updateOrInsert(
            ['email' => 'admin@admin.com'],
            [
                'moonshine_user_role_id' => 1,
                'name' => 'Administrador',
                'password' => Hash::make('password123'),
                'avatar' => null,
                'remember_token' => null,
            ]
        );
    }
}
