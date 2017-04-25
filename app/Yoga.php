<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yoga extends Model
{
    protected $fillable = [

        'name' ,
        'descp',
        'classday',
        'startdate',
        'enddate',
        'location_id' ,
        'min_quantity',
        'max_quantity',
        'starttime',
        'endtime' ,
        'price',
        'is_active',
        'user_id'

    ];
}
