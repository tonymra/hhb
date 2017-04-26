<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Course extends Model
{


    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate'=>true,
            ]
        ];
    }


    protected $fillable = [

        'name' ,
        'descp',
        'startdate',
        'enddate',
        'location_id' ,
        'min_quantity',
        'max_quantity',
        'starttime',
        'endtime' ,
        'price',
        'is_active',
        'user_id',

    ];
}
