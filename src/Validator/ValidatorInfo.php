<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 27/02/2019
 * Time: 09:35
 */

namespace PHPInitiation\Validator;


class ValidatorInfo extends Validator
{

    public function valid($userInfo): array
    {
        $error = [];

        if ($this->post("firstname") && !$this->post("firstname", FILTER_VALIDATE_REGEXP, "/^[A-Z]{1}[a-z\\xe0-\\xff-A-Z\\xc0-\\xdd\s'']{2,31}$/u")) {

            $error["firstname"] = "Firstname syntax error";


        }

        if ($this->post("lastname") && !$this->post("firstname", FILTER_VALIDATE_REGEXP, "/^[A-Z]{1}[a-z\\xe0-\\xff-A-Z\\xc0-\\xdd\s'']{2,31}$/u"))
               {
            $error["lastname"] = "Lastname syntax error";
        }

        if ($this->post("phone") && false === $this->post("phone", FILTER_VALIDATE_REGEXP,"/^[0-9]{10}$/")) {
            $error["phone"] = "Phone syntax error";
        }

        $userInfo->setLastName(filter_input(INPUT_POST, "lastname"));
        $userInfo->setFirstName(filter_input(INPUT_POST, "firstname"));
        $userInfo->setPhone(filter_input(INPUT_POST, "phone"));

        return $error;
    }


}