<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Superadmin',
            'email'    => 'superadmin@fake.com',
            'password' =>  Hash::make('123456'),
            'role'     => 5,
            'active'     => 1,
            'avatar'   => 'avatar1.jpg',
            'email_verified_at' => '2020-04-30 17:24:47',
        ]);
    }
}
