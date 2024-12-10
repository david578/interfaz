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
       Permission::create(['name'=>'usuarios.listado'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.nuevo'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.guardar'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.detalle'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.editar'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.actualizar'])->assignRole($role1);
       Permission::create(['name'=>'usuarios.eliminar'])->assignRole($role1);

    }
}
