<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([

            ['image_path' => Str::random(10),
            'added_at' => Carbon::now(),            
            'description' => Str::random(35),
            'pet_id' => rand(1,4)],

            ['image_path' => Str::random(10),
            'added_at' => Carbon::now(),            
            'description' => Str::random(35),
            'pet_id' => rand(1,4)],

            ['image_path' => Str::random(10),
            'added_at' => Carbon::now(),            
            'description' => Str::random(35),
            'pet_id' => rand(1,4)],

            ['image_path' => Str::random(10),
            'added_at' => Carbon::now(),            
            'description' => Str::random(35),
            'pet_id' => rand(1,4)]
        ]);
    }
}
