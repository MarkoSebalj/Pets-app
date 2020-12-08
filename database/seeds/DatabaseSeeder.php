<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           
           CountrySeeder::class,
           AllergySeeder::class,
           UserSeeder::class,
           MedicalConditionSeeder::class,           
           PetTypeSeeder::class,
           PetSeeder::class,
           CalendarSeeder::class,           
           VeterinarianVisitSeeder::class,
           VisitSeeder::class,
           ImageSeeder::class
          
                    
        ]);
     
        // $this->call(UserSeeder::class);
    }
}
