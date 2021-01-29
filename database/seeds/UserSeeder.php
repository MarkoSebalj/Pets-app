<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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

            ['first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'role_id' => rand(1,3),
            'country_id' => rand(1,4)],

            ['first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'role_id' => rand(1,3),
            'country_id' => rand(1,4)],

            ['first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'role_id' => rand(1,3),
            'country_id' => rand(1,4)],
            
            ['first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'password' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'role_id' => rand(1,3),
            'country_id' => rand(1,4)]
            
            
        ]);
    }
}
