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
        
        PetTypeSeeder::class, 
        CountrySeeder::class, 
        UserSeeder::class,
        AllergySeeder::class,
        MedicalConditionSeeder::class,
        PetSeeder::class,
        ImageSeeder::class,                        
        CalendarSeeder::class,           
        VeterinarianVisitSeeder::class,
        VisitSeeder::class
           
          
                    
        ]);
     
        // $this->call(UserSeeder::class);
    }
}
