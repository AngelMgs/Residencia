<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        $user_permissions = $admin_permissions->filter(function($permission) {
            return
            //permisos que no tiene el rol
            substr($permission->name, 0, 5) != 'form_' &&
            substr($permission->name, 0, 5) != 'user_' &&
            substr($permission->name, 0, 5) != 'role_' &&
            substr($permission->name, 0, 7) != 'record_' &&
            substr($permission->name, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);  

        $user_permissions = $admin_permissions->filter(function($permission) {
            return
            //permisos que no tiene el rol
            $permission->name != 'user_destroy' && 
            $permission->name != 'user_edit' && 
            $permission->name != 'user_create' && 
            substr($permission->name, 0, 6) != 'files_' &&
            substr($permission->name, 0, 7) != 'record_' &&
            substr($permission->name, 0, 5) != 'role_' &&
            substr($permission->name, 0, 11) != 'permission_';
        });
        Role::findOrFail(3)->permissions()->sync($user_permissions);    

        $user_permissions = $admin_permissions->filter(function($permission) {
            return
            //permisos que no tiene el rol
            substr($permission->name, 0, 5) != 'user_' &&
            substr($permission->name, 0, 5) != 'role_' &&
            substr($permission->name, 0, 6) != 'files_' &&
            substr($permission->name, 0, 6) != 'pages_' &&
            substr($permission->name, 0, 11) != 'permission_';
        });
        Role::findOrFail(4)->permissions()->sync($user_permissions);  

        

    }
}
