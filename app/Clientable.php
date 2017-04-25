<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientable extends Model
{
    //
    protected $fillable = [

        'client_id' ,
        'clientable_id',
        'clientable_type'
    ];
}
