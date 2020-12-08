<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('gender', 50);
            $table->DateTime('born_at');
            $table->string('breed', 100);



            $table->foreignId('user_id')->constrained();  
            $table->foreignId('pet_type_id')->constrained();
            $table->foreignId('allergy_id')->constrained(); 
            $table->foreignId('medical_condition_id')->constrained();
             
                  

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
