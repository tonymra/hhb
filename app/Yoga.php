<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Yoga extends Model
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
        'classday',
        'startdate',
        'enddate',
        'location_id' ,
        'min_quantity',
        'max_quantity',
        'starttime',
        'endtime' ,
        'price',
        'is_active',
        'user_id'

    ];
}
