<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergies')->insert([
            ['name' => Str::random(10),
            'category' => Str::random(10),
            'note' => Str::random(200),
            'diagnosed_at' => Carbon::now()],

            ['name' => Str::random(10),
            'category' => Str::random(10),
            'note' => Str::random(200),
            'diagnosed_at' => Carbon::yesterday()],

            ['name' => Str::random(10),
            'category' => Str::random(10),
            'note' => Str::random(200),
            'diagnosed_at' => Carbon::tomorrow()],

            ['name' => Str::random(10),
            'category' => Str::random(10),
            'note' => Str::random(200),
            'diagnosed_at' => Carbon::now()],

            ]);   
    }
}
