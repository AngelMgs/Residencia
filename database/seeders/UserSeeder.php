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
            'email' => 'Admin@admin.com',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Admin');

        $user = User ::create([
            'email' => 'docente@docente.com',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Docente');

        $user = User ::create([
            'email' => 'psicologo@psicologo.com',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Psicologo');

        User::factory(50)->create();

    }
}
