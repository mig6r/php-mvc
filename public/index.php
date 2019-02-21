<?php

/*$foo = "bar";
$$foo = "jesuisbar";
$$$foo = "je suis bar 2";

var_dump($jesuisbar); // je suis bar2
var_dump($bar); // je suis bar
*/
//var_dump($_SERVER);

$url = $_SERVER["REDIRECT_URL"];
$methode = $_SERVER["REQUEST_METHOD"];

$afficheUrl="Page non trouvée";

if("/php-initiation/public/home" === $url){
    $afficheUrl = "Accueil";
}else if("/php-initiation/public/contact" === $url){
    $afficheUrl = "Contact";
}

echo $afficheUrl;