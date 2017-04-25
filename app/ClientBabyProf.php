<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyProf extends Model
{
    protected $fillable = [

        'client_id' ,
        'answer_prof',
        'comments_prof'

    ];
}
