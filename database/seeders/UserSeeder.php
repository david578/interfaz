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

        User::create([
            'name' => 'elian david',
            'email' => 'elian4324@gmail.com',
            'password' => bcrypt('12345'),
        ])->assignRole('Cajero');

        User::create([
            'name' => 'luis caracas',
            'email' => 'luisc123@gmail.com',
            'password' => bcrypt('12345'),
        ])->assignRole('Empresa');
    }
}
