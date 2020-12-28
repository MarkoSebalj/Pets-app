<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical_Condition extends Model
{
    public $table = "medical_conditions";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'severity',
<<<<<<< HEAD
        'note',
        'diagnosed_at'
    ];

    public function pets() 
    { 
        
        return $this->hasMany(Pet::class); 

       
    }
=======
         'note',
          'diagnosed_at'
    ];
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
}
