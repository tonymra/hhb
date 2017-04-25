<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [

        'name' ,
        'email',
        'cell',
        'address',
        'source' ,
        'disclaimer',
        'paid',
        'is_active'
    ];
}
