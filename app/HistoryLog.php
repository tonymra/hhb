<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryLog extends Model
{
    protected $fillable = [

        'user_id' ,
        'action'

    ];
}
