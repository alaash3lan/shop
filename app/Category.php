<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name',];


    /**
     * relation one to many [category->subcategory]
     *
     * @return mixed
     */
    public function subcategory()
    {
        return $this->hasMany('App\Subcategory');
    }
}
