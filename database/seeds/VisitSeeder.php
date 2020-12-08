<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
            
            'visited_at' => Carbon::now(),
            'veterinarian_visit_id' => rand(1,3),
            'pet_id' => rand(1,3)


            ]);   
    }
}
