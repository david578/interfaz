<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role1 = Role::create(['name'=>'Admin']);
       $role2 = Role::create(['name'=>'Cajero']);
       $role3 = Role::create(['name'=>'Empresa']);

       Permission::create(['name'=>'admin.inicio'])->assignRole($role1);

       Permission::create(['name'=>'usuarios.index1'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.create'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.edit'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.destroy'])->assignRole($role1);


    }
}
