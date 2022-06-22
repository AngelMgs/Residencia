<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User ::create([
            'email' => 'Admin@prepa7.edu.mx',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Admin');

        $user = User ::create([
            'email' => 'docente@prepa7.edu.mx',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Docente');

        $user = User ::create([
            'email' => 'psicologo@prepa7.edu.mx',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Psicologo');

        $user = User ::create([
            'email' => 'editor@prepa7.edu.mx',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Editor');

        
    }
}
