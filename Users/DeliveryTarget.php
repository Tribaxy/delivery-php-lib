<?php
/**
 * Created by PhpStorm.
 * User: pens
 * Date: 10/30/17
 * Time: 7:25 AM
 */

namespace Tribaxy\Users;


class DeliveryTarget
{
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $alternatePhoneNumber;
    private $address;

    public function __construct($param = array())
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;

        if ($alternatePhoneNumber != null)
            $this->alternatePhoneNumber = $alternatePhoneNumber;
    }


    /**
     * @return string First Name
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getAlternatePhoneNumber()
    {
        return $this->alternatePhoneNumber;
    }

    /**
     * @param mixed $alternatePhoneNumber
     */
    public function setAlternatePhoneNumber($alternatePhoneNumber)
    {
        $this->alternatePhoneNumber = $alternatePhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }



}