<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=array(
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password'),
            'role'=>'admin',
            'status'=>1,
        );
        DB::table('users')->insert($user);
    }
}
