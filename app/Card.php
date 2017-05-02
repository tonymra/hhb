<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Card extends Model
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
        'price',
        'quantity',
        'user_id'

    ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }

    //Accessor - format price to currency format

    public function getPriceAttribute($value){

        $fractional=true;

        if ($fractional) {
            $value = sprintf('%.2f', $value);
        }
        while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $value);
            if ($replaced != $value) {
                $value = $replaced;
            } else {
                break;
            }
        }
        return $value;
    }
}
