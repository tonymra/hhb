<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = [

        'name' ,
        'price',
        'quantity',
        'user_id'

    ];
}
