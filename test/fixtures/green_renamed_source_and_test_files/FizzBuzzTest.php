<?php
require_once 'FizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testMultiples_of_three_are_Fizz()
    {
        $this->assertEquals('Fizz', fizz_buzz(6));
    }
}

?>
