<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 04/03/2019
 * Time: 09:59
 */

namespace PHPInitiation\Connection;


class Connection
{

    private static $dbh;

private function __construct(){

    $params = json_decode(file_get_contents(__DIR__ . "/../../config/database.json"));


    self::$dbh = new \PDO(
            "mysql:host=".$params->host.";dbname=".$params->dbname.";charset=utf8",
        $params->user,
        $params->password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]

        );
}


   public static function getConnection()
    {
        if (null === self::$dbh) {

           new Connection();
        }

        return self::$dbh;
    }

}