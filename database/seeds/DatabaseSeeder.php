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
        
       
        RoleSeeder::class,
        PetTypeSeeder::class, 
        CountrySeeder::class, 
        UserSeeder::class,
        AllergySeeder::class,
        MedicalConditionSeeder::class,
        PetSeeder::class,                             
        CalendarSeeder::class,
        ImageSeeder::class,          
        VeterinarianVisitSeeder::class,
        VisitSeeder::class,
        
       
       
           
          
                    
        ]);
     
        // $this->call(UserSeeder::class);
    }
}
