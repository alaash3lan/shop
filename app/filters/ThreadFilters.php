<?php

namespace App\filters;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\User;

/**
 *
 */
class ThreadFilters extends Filters
{
    protected  $filters = ['popular','price'];

     /** filter by popularity
     * @param $builder
     * @param $username
     * @return mixed
     */
    protected function popular()
    {
    	$this->builder->getQuery()->orders = [];
       return $this->builder->orderBy('views', 'desc');
    }

    /**
     * filter by price
     */
    protected function price()
    {
    	$this->builder->getQuery()->orders = [];
        return $this->builder->orderBy('price', 'desc');
    }



}


