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
$job,
    /**
     * @var string
     */
$phone;


    /**
     * @param string $lastName
     */
public function setLastName(string $lastName)
    {
        $this->lastname = $lastName;
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
    public function setJob(string $job)
    {
        $this->job = $job;
    }

    /**
     * @return string|null
     */
    public function getJob(): ?string
    {
        return $this->job;
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