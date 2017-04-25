<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBaby extends Model
{
    protected $fillable = [

        'client_id' ,
        'name',
        'dob',
        'crawling',
        'walking'

    ];
}
