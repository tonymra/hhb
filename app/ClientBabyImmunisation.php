<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyImmunisation extends Model
{
    protected $fillable = [

        'client_id' ,
        'answer_immun',
        'comments_immun'

    ];
}
