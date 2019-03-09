<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 27/02/2019
 * Time: 13:59
 */

namespace PHPInitiation\Validator;


class ValidatorSignin extends ValidatorLogin
{

    public function valid($user) : array
    {
        $error = parent::valid($user);

    if ($this->post("password") !== $this->post("confirm")) {
        $error["confirm"] = "The password must be confirmed";
    }
    return $error;
    }

}