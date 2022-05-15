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
            'matricula' => '07E8H0067N',
            'password' => bcrypt('1234'),
        ]);
        $user->assignRole('Admin');


    }
}
