<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Esteban Cordoba',
            'email' => 'cordoba774@gmail.com',
            'password' => bcrypt('yeezus333'),
        ])->assignRole('Admin');
    }
}
