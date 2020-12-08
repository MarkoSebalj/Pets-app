<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VeterinarianVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veterinarian_visits')->insert([
            ['name' => Str::random(10),
            'price' => '105',
            'note' => Str::random(200),
            'appointment_at' => Carbon::tomorrow(),],

            ['name' => Str::random(10),
            'price' => '110',
            'note' => Str::random(200),
            'appointment_at' => Carbon::tomorrow(),],

            ['name' => Str::random(10),
            'price' => '104',
            'note' => Str::random(200),
            'appointment_at' => Carbon::tomorrow(),]

            ]); 
    }
}
