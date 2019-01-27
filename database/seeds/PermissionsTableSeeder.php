<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::Create([
            'name'=>'Navegar Usuarios',
            'slug'=>'users.index',
            'description'=>'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::Create([
            'name'=>'Ver Usuarios',
            'slug'=>'users.show',
            'description'=>'Permite ver el detalle de cada usuario del sistema',
        ]);

        Permission::Create([
            'name'=>'Crear Usuarios',
            'slug'=>'users.create',
            'description'=>'Permite crear un usuario del sistema',
        ]);

        Permission::Create([
            'name'=>'Editar Usuarios',
            'slug'=>'users.edit',
            'description'=>'Edita los datos de los usuarios del sistema',
        ]);

        Permission::Create([
            'name'=>'Eliminar Usuarios',
            'slug'=>'users.destroy',
            'description'=>'Elimina los usuarios del sistema',
        ]);

        //Roles

        Permission::Create([
            'name'=>'Navegar Roles',
            'slug'=>'roles.index',
            'description'=>'Lista y navega todos los roles del sistema',
        ]);

        Permission::Create([
            'name'=>'Ver Roles',
            'slug'=>'roles.show',
            'description'=>'Permite ver el detalle de cada roles del sistema',
        ]);

        Permission::Create([
            'name'=>'Ver Roles',
            'slug'=>'roles.create',
            'description'=>'Permite ver el detalle de cada roles del sistema',
        ]);

        Permission::Create([
            'name'=>'Editar Roles',
            'slug'=>'roles.edit',
            'description'=>'Edita los datos de los roles del sistema',
        ]);

        Permission::Create([
            'name'=>'Eliminar Roles',
            'slug'=>'roles.destroy',
            'description'=>'Elimina los roles del sistema',
        ]);
    }
}
