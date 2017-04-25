<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyHealth extends Model
{
    protected $fillable = [

        'client_id' ,
        'answer_health',
        'comments_health'

    ];
}
