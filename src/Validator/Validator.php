<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 27/02/2019
 * Time: 10:26
 */

namespace PHPInitiation\Validator;


//
class Validator
{


    protected function post($variableName, $filter = null, $regex = null){

        $options = null;
        if(!$filter){
            $filter = FILTER_DEFAULT;
        }else if($filter === FILTER_VALIDATE_REGEXP) {
          $options = ["options" => ["regexp" => $regex]];
        }
        return(filter_input(INPUT_POST, $variableName, $filter, $options));

    }
}