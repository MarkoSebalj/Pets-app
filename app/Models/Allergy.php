<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category', 'note', 'diagnosed_at'
    ];

    public function pets() 

        { 
            return $this->hasMany(Pet::class); 
        }
}
