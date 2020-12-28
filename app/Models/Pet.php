<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gender', 'born_at', 'breed'
    ];

    public function images() 
        { 
            return $this->hasMany(Image::class); 
        
        }

        public function visits()
        {
           
            return $this->belongsToMany(User::class, 'visits', 'pet_id', 'veterinarian_visit_id');
        }

        public function medical_conditions() 
        {

            return $this->belongsTo(  Pet::class);

        }

}
