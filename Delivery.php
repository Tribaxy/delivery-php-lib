<?php
/**
 * Created by PhpStorm.
 * User: pens
 * Date: 10/29/17
 * Time: 6:03 PM
 */

namespace Tribaxy;


use Tribaxy\Validators\AddressValidator;

class Delivery
{
    private $apiKey;

    private $streetNumber;
    private $streetName;
    private $city;
    private $state;
    private $country;

    private $addressValidator;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->addressValidator = new AddressValidator();

    }

    public function setDeliveryAddress($streetNumber, $streetName, $city, $state, $country){
        $address = [
            'streetNumber' => $streetNumber,
            'streetName' => $streetName,
            'city' => $city,
            'state' => $state,
            'country' => $country
        ];
        $this->addressValidator->validateAddress($address);

        if($this->addressValidator->hasErrors()){
            return $this->addressValidator->getErrors();
        }

        $this->setStreetNumber($streetNumber);
        $this->setStreetName($streetName);
        $this->setCity($city);
        $this->setCountry($country);
    }

    public function setFullDeliveryAddress($address){

    }

    public function setStreetNumber($streetNumber){
        $this->streetNumber = $streetNumber;
    }

    public function setStreetName($streetName){
        $this->streetName = $streetName;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    private function validateAddress($params = array()){}
}