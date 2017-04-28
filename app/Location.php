<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Location extends Model
{


    use Sluggable;
    use SluggableScopeHelpers;


    protected $table = 'locations';


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
        'address',
        'user_id'

    ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }
}
