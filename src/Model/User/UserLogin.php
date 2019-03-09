<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 22/02/2019
 * Time: 14:40
 */

namespace PHPInitiation\Model\User;


class UserLogin
{
private
    /**
     * @var string
     */
    $email,
    /**
     * @var string
     */
    $password;



    public function setEmail(string $mail)
    {
        $this->email = $mail;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getId(): ?int
    {
       return $this->id;
    }

    /**
     * @param
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

}