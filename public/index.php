<?php

//Status code

//norme PSR4 pour les chemins de class
//use PHPInitiation\Controller\Users\UsersController;
//use PHPInitiation\Controller\Home\HomeController;
//use PHPInitiation\Controller\Contact\ContactController;

use \PHPInitiation\Connection\Connection;

//je récupère le loader de composer
require __DIR__ . "/../vendor/autoload.php";


//$url = $_SERVER["REDIRECT_URL"];
$url = filter_input(INPUT_SERVER, "REDIRECT_URL");
//$methode = $_SERVER["REQUEST_METHOD"];
$methode = filter_input(INPUT_SERVER, "REQUEST_METHOD");
//var_dump($_SERVER);
$_POST = $_POST = $_SERVER = null;

$baseUrl = "/php-initiation/public";
$baseClassName = "PHPInitiation\\Controller\\";

//$routes= json_decode(file_get_contents("../config/routes.json"));
$routes = json_decode(file_get_contents(__DIR__ . "/../config/routes.json"));


foreach ($routes as $value) {

    if (!preg_match("/^".str_replace("/","\/",$baseUrl . $value->url)."$/",$url, $match)) {
        continue;
    }

    array_shift($match);


    $methodes = explode(",", strtoupper($value->method));
    if(!in_array($methode, $methodes)){

        header("HTTP/1.1 405 Method Not Allowed");
        die("Method Not Allowed");
    }


    $className = $baseClassName . str_replace("/", "\\", $value->controller);
    $controller = new $className;
    $controller->{$value->action}(...$match);
    exit;
}

header("HTTP/1.1 404 Not Found");
die("not Found");





/*
if ("/php-initiation/public/home" === $url) {

    //include(__DIR__ . "/../src/Controller/HomeController/home.php");
    $read = new HomeController();
    $read->read();

} else if ("/php-initiation/public/contact" === $url) {

    //include(__DIR__ . "/../src/Controller/ContactController/ContactControllerController.php");
    $read = new ContactController();
    $read->read();

} else if ("/php-initiation/public/users" === $url) {

    //include (__DIR__ . "/../src/Controller/Users/UsersController.php");
    $read = new UsersController();
    $read->read();


} else {
    echo "Page non trouvée";
}*/