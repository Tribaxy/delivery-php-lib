<?php
/**
 * Created by PhpStorm.
 * User: pens
 * Date: 10/30/17
 * Time: 8:29 AM
 */

namespace Tribaxy\Validators;


class RecipientValidator extends Validator
{
    private $recipientError = array();

    public function validateRecipient($params = array())
    {
        if(!$this->checkForAllParameters($params)){
            $this->recipientError['message'] = 'some values are missing';
        }




    }

    private function checkForAllParameters($params = array()){
        return isset($params['firstName'], $params['lastName'], $params['phoneNumber'], $params['address']);
    }

    private function validateFirstName($firstName){
        if(!is_string($firstName)){
            $this->setErrorMessage('First name has to be a valid string');
            return false;
        }
        return true;
    }

    private function validateLastName($lastName){
        if(!is_string($lastName)){
            $this->setErrorMessage('Last name has to be a valid string');
            return false;
        }
        return true;
    }

    private function setErrorMessage($message){
        $this->recipientError['message'] = $message;
    }
}