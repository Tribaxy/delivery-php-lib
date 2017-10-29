<?php
/**
 * Created by PhpStorm.
 * User: pens
 * Date: 10/29/17
 * Time: 6:19 PM
 */

namespace Tribaxy\Validators;


class AddressValidator extends Validator
{
    private $addressError = array();

    public function validateAddress($params = array()){

        if(empty($params['streetNumber']) || empty($params['streetName'])
            || empty($params['city']) || empty($params['state']) || empty($params['country'])){
            $this->addressError['general'] = "Incomplete Parameters";

            $this->errors['address'] = $this->addressError;
        }

       if(!$this->isStreetNameValid($params['streetNumber'])){
            $this->addressError['streetName'] = $this->tmpMessage;
       }

    }

    private function isStreetNumberValid($streetNumber){
        if(!is_int($streetNumber)){
            $this->tmpMessage = "Street Number has to be an integer";
            return false;
        }

        return true;
    }

    private function isStreetNameValid($streetName){}

    private function isCityValid($city){}

    private function isStateValid($state){}

    private function isCountryValid($country)
    {

    }

}