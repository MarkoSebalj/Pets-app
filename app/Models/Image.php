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
<<<<<<< HEAD

    public function pet() 
    { 
        return $this->belongsTo(Pet::class);
    }
}
=======
}
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
