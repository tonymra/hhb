<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YogaAttend extends Model
{
    protected $fillable = [

        'client_id' ,
        'yoga_id',
        'class_date',
        'attended'

    ];
}
