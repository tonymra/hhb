<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientEmergencyContact extends Model
{
    protected $fillable = [

        'client_id' ,
        'name',
        'phone'

    ];
}
