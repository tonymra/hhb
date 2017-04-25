<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyPostnatal extends Model
{
    protected $fillable = [

        'client_id' ,
        'answer_postntal',
        'comments_postnatal'

    ];
}
