<?php

namespace App\Filters;
use Illuminate\Http\Request;

 abstract class Filters
{
    protected  $builder ;
    protected $filters = [];

    function __construct(Request $request)
    {
        return $this->request = $request;
    }

     public  function  apply($builder){
        $this->builder = $builder;
        foreach ($this->filters as $filter){
                     if ($this->HasFilter($filter)){
                          $this->$filter($this->request->$filter); }
        }
        return $this->builder;
    }

     /** check if it has filters
      * @param $filter
      * @return bool
      */
     protected function HasFilter($filter): bool
     {
         return method_exists($this, $filter) && $this->request->has($filter);
     }

}
