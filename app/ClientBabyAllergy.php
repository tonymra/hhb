<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyAllergy extends Model
{

    protected $fillable = [

        'client_id' ,
        'answer_allergies',
        'comments_allergies'

    ];
}
