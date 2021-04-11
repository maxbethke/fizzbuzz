<?php

namespace FizzBuzz\Tests;

require_once("src/fizzBuzz.php");

use PHPUnit\Framework\TestCase;
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
}