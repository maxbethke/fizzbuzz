<?php

namespace FizzBuzz\Tests;

require("src/fizzBuzz.php");

use PHPUnit\Framework\TestCase;
use FizzBuzz\App\FizzBuzz;

class instanceTest extends TestCase {
    public function testCanCreateInstance() {
        $this->assertInstanceOf(
            FizzBuzz::class,
            new FizzBuzz()
        );
    }
}