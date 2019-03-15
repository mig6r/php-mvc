<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 15/03/2019
 * Time: 12:43
 */

namespace PHPInitiation\Repository;


use PHPInitiation\Connection\Connection;
use PHPInitiation\Model\User\UserInfo;

class UserInfosRepository
{

    public function persist(UserInfo $userInfo)
    {
        $dbh = Connection::getConnection();
        $sql = "INSERT INTO `user_infos`(`id_user`,  `firstName`, `lastName`, `phone`)"
            ."VALUES (:idUser, :firstName, :lastName, :phone)";
        $sth = $dbh ->prepare($sql);
        $sth->bindValue(":idUser", $userInfo->getIdUser());
        $sth->bindValue(":firstName", $userInfo->getFirstName());
        $sth->bindValue(":lastName", $userInfo->getLastName());
        $sth->bindValue(":phone", $userInfo->getPhone());
        $sth->execute();
    }

}