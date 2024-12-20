<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Android Corners',
            'email'     => 'android@email.com',
            'password'  => Hash::make('android'),
            'address'     => 'Jl. Belajar no 717',
            'houseNumber'     => 'Rumah No. 17',
            'phoneNumber'     => '081515815175',
            'city'     => 'Demak',
            'roles'     => 'ADMIN',
        ]);
    }

}
