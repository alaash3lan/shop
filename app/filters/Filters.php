<?php
/**
 * Created by PhpStorm.
 * User: alaa
 * Date: 02/08/18
 * Time: 06:55 م
 */


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

     /**
      * @param $filter
      * @return bool
      */
     protected function HasFilter($filter): bool
     {
         return method_exists($this, $filter) && $this->request->has($filter);
     }

//    public function apply($builder){
//        $this->builder = $builder;
//
//        foreach($this->getFilters() as $filter=>$value){   //filter by,value yunus mesela.
//            if(method_exist($this,$filter)){
//                $this->$filter($value);
//            }
//
//        }
//
//        return $this->builder;
//
//    }
//
//
//    public function getFilters(){
//
//        return $this->request->intersect($this->filters);
//    }

}
