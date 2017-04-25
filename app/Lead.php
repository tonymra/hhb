<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [

        'name' ,
        'email',
        'phone',
        'baby_dob',
        'status' ,
        'message',

    ];
}
