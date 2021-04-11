<?php

namespace FizzBuzz\App;

require_once("src/models/invalidInputException.php");

use FizzBuzz\Exceptions\InvalidInputException;

class FizzBuzz {
    public function convertChar($char): string {
        if(!is_int($char)) {
            throw new InvalidInputException("Can only FizzBuzz integers!");
        }
        
        return strval($char);
    }
}