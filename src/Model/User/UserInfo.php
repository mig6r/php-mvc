<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 22/02/2019
 * Time: 14:42
 */

namespace PHPInitiation\Model\User;


class UserInfo
{
    private

        /**
         * @var int
         */
$idUser,
    /**
     * @var string
     */
$lastName,
    /**
     * @var string
     */
$firstName,
    /*
     * @var string
     */
$avatar,
    /**
     * @var string
     */
$phone;

    /**
     * @param int $idUser
     */
    public function setIdUser(int $idUser)
    {
        $this->idUser = $idUser;
    }


    /**
     * @return int|null
     */
    public function getIdUser(): ?int
    {
        return $this->idUser;
    }


    /**
     * @param string $lastName
     */
public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $job
     */
    public function setAvatard(string $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }


}