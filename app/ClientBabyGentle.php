<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyGentle extends Model
{
    protected $fillable = [

        'client_id' ,
        'answer_gentle',
        'comments_gentle'

    ];
}
