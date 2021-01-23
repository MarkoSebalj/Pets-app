<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet_Type extends Model
{
    public $table = "pet_types";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function pets() 

        { 
            return $this->hasMany(Pet::class); 
        }

    
}
