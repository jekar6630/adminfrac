<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = [
        'code',
        'cvesae',
        'street',
        'schedule',
        'idType',
        'idLot',
        'idApple',
        'idSector'
    ];

    public function directiontype(){
        return $this->hasOne(DireccionType::class,'id','idType');
    }

    public function lote(){
        return $this->hasOne(Lote::class,'id','idLot');
    }

    public function manzana(){
        return $this->hasOne(Manzana::class,'id','idApple');
    }

    public function sector(){
        return $this->hasOne(Sector::class,'id','idSector');
    }
}
