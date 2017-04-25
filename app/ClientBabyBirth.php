<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBabyBirth extends Model
{
    protected $fillable = [

        'client_id' ,
        'full_term',
        'premature',
        'premature_days',
        'overdue' ,
        'overdue_days'

    ];
}
