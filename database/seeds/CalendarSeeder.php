<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendars')->insert([

            ['vaccination_at' => Carbon::yesterday(),        
            'bedtime_at' => Carbon::yesterday(),
            'bathtime_at' => Carbon::yesterday(),
            'foodtime_at' => Carbon::yesterday(),
            'pet_id' => rand(1,3)],

            ['vaccination_at' => Carbon::yesterday(),        
            'bedtime_at' => Carbon::yesterday(),
            'bathtime_at' => Carbon::yesterday(),
            'foodtime_at' => Carbon::yesterday(),
            'pet_id' => rand(1,3)],

            ['vaccination_at' => Carbon::yesterday(),        
            'bedtime_at' => Carbon::yesterday(),
            'bathtime_at' => Carbon::yesterday(),
            'foodtime_at' => Carbon::yesterday(),
            'pet_id' => rand(1,3)]
            ]);
    }
}
