<?php
/**
 * @author Sébastien
 * @version 0.0.1
 */

namespace PHPInitiation\Model\User;

use PHPInitiation\Model\User\UserInfo;
use PHPInitiation\Model\User\UserLogin;
use PHPInitiation\Model\User\UserAvatar;

/**
 * Class User
 * @package PHPInitiation\Model\User
 */
class User
{
    private
        /**
         * @var int
         */
        $id,
        /**
         * @var UserInfo
         */
        $info,
        /**
         * @var UserAvatar
         */
        $avatar,
        /**
         * @var UserLogin
         */
        $login;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getInfo(): ?UserInfo
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo(UserInfo $info): void
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getAvatar(): ?UserAvatar
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar(UserAvatar $avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getLogin(): ?UserLogin
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin(UserLogin $login): void
    {
        $this->login = $login;
    }


}