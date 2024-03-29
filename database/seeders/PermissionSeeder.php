<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions=[
            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_destroy',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_destroy',
            
            'user_index',
            'user_create',
            'user_show',
            'user_edit',
            'user_destroy',

            'record_index',
            'record_create',
            'record_show',
            'record_edit',
            'record_destroy',

            'files_index',
            'files_create',
            'files_show',
            'files_destroy',

            'form_index',
            'form_create',
            'form_show',
            'form_edit',
            'form_destroy',

            'pages_index',
            'pages_create',
            'pages_show',
            'pages_edit',
            'pages_destroy',

            'editor_index',
            'editor_create',
            'editor_show',
            'editor_edit',
            'editor_destroy',

        ];

        foreach($permissions as $permission){
            Permission::create([
                'name'=>$permission
            ]);
        }
    }
}
