<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [

        'name' ,
        'descp',
        'startdate',
        'enddate',
        'location_id' ,
        'min_quantity',
        'max_quantity',
        'starttime',
        'endtime' ,
        'price',
        'is_active',
        'user_id',

    ];
}
