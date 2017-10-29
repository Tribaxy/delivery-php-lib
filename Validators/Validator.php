<?php
/**
 * Created by PhpStorm.
 * User: pens
 * Date: 10/29/17
 * Time: 6:37 PM
 */

namespace Tribaxy\Validators;


class Validator
{
    protected $errors = array();
    protected $tmpMessage = null;

    public function hasErrors(){
        if (empty($this->errors)){
            return false;
        }
        return true;
    }

    public function getErrors(){
        return $this->errors;
    }
}