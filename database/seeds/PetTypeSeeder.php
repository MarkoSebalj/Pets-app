<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_types')->insert([

        ['name' => Str::random(10)],
        ['name' => Str::random(10)],
        ['name' => Str::random(10)],
        ['name' => Str::random(10)]
        ]);
            
    }
}
