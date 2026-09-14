<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class HikerTest extends TestCase
{
    public function testLife_the_universe_and_everything()
    {
        $this->assertEquals(42, answer());
    }

    public function testAnswer_has_two_digits()
    {
        $this->assertEquals(2, strlen((string)answer()));
    }

    public function testAnswer_is_six_times_nine()
    {
        $this->assertEquals(54, answer());
    }
}

?>
