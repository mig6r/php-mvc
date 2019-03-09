<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 22/02/2019
 * Time: 14:43
 */

namespace PHPInitiation\Model\User;


class UserAvatar
{
    private
        /**
         * @var string
         */
        $avatar;

    /**
     * @param string $avatar
     */
        public function setAvatar(string $avatar)
    {
        $this->avatar = avatar;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }
}