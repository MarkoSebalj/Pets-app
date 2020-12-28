<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            
           ['name' => str::random(10),
            'gender'=> str::random(10),
            'breed' => str::random(10),
            'born_at' => carbon::create('2017','04','10'),

            'user_id' => rand(1,4),
            'pet_type_id' => rand(1,4),
            'allergy_id' => rand(1,4),
            'medical_condition_id' => rand(1,4)],

            ['name' => str::random(10),
            'gender'=> str::random(10),
            'breed' => str::random(10),
            'born_at' => carbon::create('2016','04','10'),

            'user_id' => rand(1,4),
            'pet_type_id' => rand(1,4),
            'allergy_id' => rand(1,4),
            'medical_condition_id' => rand(1,4)],

            ['name' => str::random(10),
            'gender'=> str::random(10),
            'breed' => str::random(10),
            'born_at' => carbon::create('2015','04','10'),

            'user_id' => rand(1,4),
            'pet_type_id' => rand(1,4),
            'allergy_id' => rand(1,4),
            'medical_condition_id' => rand(1,4)]
            

            ]);    
    }
}
