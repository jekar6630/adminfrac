<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'email2', 'password', 'phone1', 'phone2', 'phone3', 'officephone', 'movilphone1', 'movilphone2', 'idCompany', 'idFunction'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function company(){
        return $this->hasOne(Compania::class,'id','idCompany');
    }

    public function function(){
        return $this->hasOne(Funcion::class,'id','idFunction');
    }
}
