<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDay extends Model
{
    protected $fillable = [

        'course_id' ,
        'class_number',
        'class_date',
        'completed',
        'is_active'

    ];
}
