<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 04/03/2019
 * Time: 12:01
 */

namespace PHPInitiation\Repository;
use PHPInitiation\Connection\Connection;
use PHPInitiation\Model\User\UserLogin;

class UserLoginRepository
{

    public function persist(UserLogin $userLogin):int
    {
        $password = password_hash($userLogin->getPassword(), PASSWORD_DEFAULT);
        // 1 - Récupérer le connection;
        $dbh=Connection::getConnection();
        // 2 - Préparer la requette
        $sql = "INSERT INTO `user_login` (`email`, `password`)"
            . "VALUES (:email, :password)";
        $sth = $dbh->prepare($sql);
        // 3 Rattacher nos valeurs
        $sth->bindValue(":email", $userLogin->getEmail());
        $sth->bindValue(":password", $password);
        // 4 Executer
        $sth->execute();
        return $dbh->lastInsertId();

    }


    public function findAll():array
    {

        $dbh=Connection::getConnection();
        $sql = "SELECT `id`, `email`, `password` FROM `user_login`";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        //on pourait indiquer le nom de la classe par le chemin mais trop long.
        $sth->setFetchMode(\PDO::FETCH_CLASS, UserLogin::class);
        return $sth->fetchAll();

    }

    public function findByEmail($userLogin)
    {
        $dbh=Connection::getConnection();
        $sql = "SELECT `id`, `password` FROM  `user_login` WHERE `email` = :email";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(":email", $userLogin->getEmail());
        $sth->execute();
        return $sth->fetchall(\PDO::FETCH_CLASS, UserLogin::class);
    }


}