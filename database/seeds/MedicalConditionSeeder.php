<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MedicalConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medical_conditions')->insert([

            ['name' => Str::random(10),
            'severity' => Str::random(10),
            'note' => Str::random(50),
            'diagnosed_at' => Carbon::tomorrow()],

            ['name' => Str::random(10),
            'severity' => Str::random(10),
            'note' => Str::random(50),
            'diagnosed_at' => Carbon::tomorrow()],

            ['name' => Str::random(10),
            'severity' => Str::random(10),
            'note' => Str::random(50),
            'diagnosed_at' => Carbon::tomorrow()],

            ['name' => Str::random(10),
            'severity' => Str::random(10),
            'note' => Str::random(50),
            'diagnosed_at' => Carbon::tomorrow()]
            ]);
    }
}
