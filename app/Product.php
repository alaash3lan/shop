<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
use Searchable;

    protected $fillable = ['name','description', 'price','user_id','photo_id','subcategory_id', ];

    public function searchableAs()
       {
           return 'name';
       }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory' );
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function scopFilter($query, $filters){

        return $filters->apply($query);

    }


}
