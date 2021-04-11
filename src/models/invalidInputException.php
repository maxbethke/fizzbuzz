<?php

namespace FizzBuzz\Exceptions;

class InvalidInputException extends \Exception {
    public function __construct() {
        parent::__construct();
    }    
}