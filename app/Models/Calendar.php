<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vaccination_at', 
        'bedtime_at', 
        'bathtime_at', 
        'foodtime_at'
    ];

    public function pet() 
    { 
        return $this->belongsTo(Pet::class);
    }
}
