<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $fillable = [
        'name',
        'street',
        'phone1',
        'phone2',
        'email'
    ];
}
