<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
use Searchable;

    protected $fillable = ['name','description', 'price','user_id','photo_id','subcategory_id', ];

    /**
     * 
     *
     * @return string
     */
    public function searchableAs()
    {
           return 'name';
    }


    /**
     *  User belongs to Product
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    /**
     *  Subcategory belongs to Product
     *
     * @return void
     */
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory' );
    }


    /**
     *  category belongs to Product
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * photo belongs to Product
     *
     * @return void
     */
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }


    /**
     * Undocumented function
     *
     * @param [type] $query
     * @param [type] $filters
     * @return mixed
     */
    public function scopFilter($query, $filters)
    {
        return $filters->apply($query);
    }


}
