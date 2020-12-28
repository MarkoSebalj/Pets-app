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
        'note',
        'diagnosed_at'
    ];

    public function pets() 
    { 
        
        return $this->hasMany(Pet::class);

       
    }
}
