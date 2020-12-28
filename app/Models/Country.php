<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
<<<<<<< HEAD

    public function users() { return $this->hasMany(User::class); }
=======
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
}
