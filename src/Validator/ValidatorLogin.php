<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 27/02/2019
 * Time: 09:34
 */

namespace PHPInitiation\Validator;



//Cette class herite de la super classe Validator
class ValidatorLogin extends Validator
{

public function valid ($userLogin)
{
    $error = [];
    //if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
      //  $error["email"] = "The adress must be an email";
    //}
    if(!$this->post("email", FILTER_VALIDATE_EMAIL)){
       $error["email"] = "The adress must be an email";
   }else{

        $userLogin->setEmail(filter_input(INPUT_POST, "email"));
    }


    if (!$this->post("password")) {
        $error["password"] = "The password is required";
    }
else{
    $userLogin->setPassword(filter_input(INPUT_POST, "password"));
}







        return $error;

}
}