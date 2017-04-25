<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyInfo extends Model
{
    protected $fillable = [

        'client_info' ,
        'answer_info',
        'comments_info'

    ];
}
