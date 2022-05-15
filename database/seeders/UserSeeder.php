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


    }
}
