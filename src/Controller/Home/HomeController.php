<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 25/02/2019
 * Time: 10:26
 */

namespace PHPInitiation\Controller\Home;
use PHPInitiation\Controller\Controller;

class HomeController extends Controller
{

    public function new(){

    }

    public function read(){
        $title = "HomeController";
        $user = false;
        if ($this->session("user")){
            $user = true;
        }
        include (__DIR__ . "/../../../template/home/home.html.php");
    }

    public function update(){

    }

    public function delete(){

    }

}