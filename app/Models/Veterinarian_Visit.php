<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinarian_Visit extends Model
{
    public $table = "veterinarian_visits";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'note', 'appointment_at'
    ];
}
