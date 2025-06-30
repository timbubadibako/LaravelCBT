<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::updateOrCreate(
            ['email' => 'admin@uniku.ac.id'],
            [
                'name' => 'Administrator',
                'password' => Hash::make(value: 'admin123'),
                'role' => 'admin',
            ]
        );
    }
}
