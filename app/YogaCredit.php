<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YogaCredit extends Model
{
    protected $fillable = [

        'client_id' ,
        'quantity',
        'expiry_date'

    ];
}
