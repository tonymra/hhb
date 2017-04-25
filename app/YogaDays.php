<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YogaDays extends Model
{
    protected $fillable = [

        'yoga_id' ,
        'class_date',
        'completed',
        'is_active'

    ];
}
