<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Lead extends Model
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
        'email',
        'phone',
        'babydob',
        'status' ,
        'message',

    ];

    //Mutators

    public function setBabyDobAttribute($value)
    {
        $this->attributes['babydob'] = \Carbon\Carbon::parse($value)->format('Y-m-d');


    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);

    }

    //Accessor

    public function getBabyDobAttribute($value)
    {
        return $this->attributes['babydob'] = \Carbon\Carbon::parse($value)->format('m/d/Y');


    }

}
