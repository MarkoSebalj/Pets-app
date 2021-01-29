<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\RoleEnum;


class User extends Authenticatable
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function country() 

    {      
        return $this->belongsTo(Country::class);   
    }

    public function pets() 

    { 
         return $this->hasMany(Pet::class); 
    }


    public function role() 

    {      
        return $this->belongsTo(Role::class);   
    }
    
    /* authorization */
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3


}
