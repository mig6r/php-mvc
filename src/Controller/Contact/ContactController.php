<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 25/02/2019
 * Time: 10:28
 */

namespace PHPInitiation\Controller\ContactController;


class ContactController
{
    public function new(){

    }

    public function read(){
        $title = "ContactController";
        include (__DIR__ . "/../../../template/contact/contact.html.php");
    }

    public function update(){

    }

    public function delete(){

    }
}