<?php

namespace FizzBuzz\Tests;

require_once("src/fizzBuzz.php");
require_once("src/models/invalidInputException.php");

use PHPUnit\Framework\TestCase;
use FizzBuzz\Exceptions\InvalidInputException;
use FizzBuzz\App\FizzBuzz;

class functionalTest extends TestCase {
    public function testConvertCharReturnsString() {
        $fizzBuzz = new FizzBuzz();
        $charToCheck = rand(1, 100);

        $this->assertTrue(
            is_string(
                $fizzBuzz->convertChar($charToCheck)
            )
        );
    }

    public function testDoesOnlyAcceptNumbers() {
        $fizzBuzz = new FizzBuzz();
        $validationString = random_bytes(3);

        $this->expectException(InvalidInputException::class);
        $fizzBuzz->convertChar($validationString);
    }
}