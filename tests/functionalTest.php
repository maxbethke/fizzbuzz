<?php

namespace FizzBuzz\Tests;

require_once("src/fizzBuzz.php");
require_once("src/models/invalidInputException.php");

use PHPUnit\Framework\TestCase;
use FizzBuzz\Exceptions\InvalidInputException;
use FizzBuzz\App\FizzBuzz;

class functionalTest extends TestCase {
    const TEST_UP_TO = 100;
    
    private $numbersFizz;
    private $numbersBuzz;
    
    private function getNumbersDivisibleBy(int $subject, int $max): array {
        $out = [];
        
        for($num = 1; $num <= $max; $num++) {
            if($num % $subject === 0) {
                $out[] = $num;
            }
        }

        return $out;
    }

    public function testConvertCharReturnsString(): void {
        $fizzBuzz = new FizzBuzz();
        $charToCheck = rand(1, 100);

        $this->assertTrue(
            is_string(
                $fizzBuzz->convertChar($charToCheck)
            )
        );
    }

    public function testDoesOnlyAcceptNumbers(): void {
        $fizzBuzz = new FizzBuzz();
        $validationString = random_bytes(3);

        $this->expectException(\TypeError::class);
        $fizzBuzz->convertChar($validationString);
    }

    public function testReturnsFizz(): void {
        if(!$this->numbersFizz) {
            $this->numbersFizz = $this->getNumbersDivisibleBy(3, self::TEST_UP_TO);
        }
        
        $fizzBuzz = new FizzBuzz();

        foreach($this->numbersFizz as $num) {
            $this->assertEquals(
                "Fizz",
                $fizzBuzz->convertChar($num)
            );
        }
    }
}