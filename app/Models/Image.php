<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_path', 'added_at', 'description',
    ];

    public function pet() 
    { 
        return $this->belongsTo(Pet::class);
    }
}