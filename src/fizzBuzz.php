<?php

namespace FizzBuzz\App;

require_once("src/models/invalidInputException.php");

use FizzBuzz\Exceptions\InvalidInputException;

class FizzBuzz {
    public function convertChar(int $char): string {  
        return (string)$char;
    }
}