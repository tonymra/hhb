<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyBirthComment extends Model
{
    protected $fillable = [

        'client_id' ,
        'comments_birth'

    ];
}
