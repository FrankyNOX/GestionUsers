<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        $data = [];

        array_push($data, [
            'name'     => 'Superadmin',
            'email'    => 'superadmin@fake.com',
            'password' => Hash::make($data['123456']),
            'role'     => 5,
            'active'     => 1,
            'avatar'   => 'avatar1.jpg',
        ]);

        array_push($data, [
            'name'     => $faker->name,
            'email'    => 'user@fake.com',
            'password' => Hash::make($data['123456']),
            'role'     => 0,
            'active'     => 1,
            'avatar'   => 'avatar2.jpg',
        ]);

        User::insert($data);
    }
}
