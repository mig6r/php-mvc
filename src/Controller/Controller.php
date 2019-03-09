<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 28/02/2019
 * Time: 09:44
 */

namespace PHPInitiation\Controller;


class Controller
{

    protected function display (string $filename, array  $data = [])
    {

        //include(__DIR__ . "/../../../template/users/users_new.html.php");
        extract ($data);
        include(__DIR__ . "/../../template/" . $filename);

    }

    protected function session ($key = null, $value = null)
    {
        if (PHP_SESSION_ACTIVE !== session_status()) {
            session_start();
        }
        if (null !== $key && null !== $value) {
            $_SESSION[$key] = $value;
        } elseif (null !== $key && false !== $key) {
            return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : null;
        }elseif (false === $key){
            session_destroy();
            $_SESSION = [];

        }
    }


}