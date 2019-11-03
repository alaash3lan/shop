<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name', 'category_id'];

    /**
     * Subcategory has many products relation 
     *
     * @return mixed
     */
    public function products()
    { 
        return $this->hasMany('App\Product');
    }

}
