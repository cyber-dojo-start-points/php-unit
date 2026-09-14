<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class HikerTest extends TestCase
{
    public function testLife_the_universe_and_everything()
    {
        $this->assertEquals(42, answer());
    }

    public function testAnswer_has_three_digits()
    {
        $this->assertEquals(3, strlen((string)answer()));
    }

    public function testAnswer_divides_by_seven()
    {
        $this->assertEquals(0, answer() % 7);
    }
}

?>
