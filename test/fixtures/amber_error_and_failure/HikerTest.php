<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class HikerTest extends TestCase
{
    public function testLife_the_universe_and_everything()
    {
        $this->assertEquals(42, answer());
    }

    public function testChecksum_of_the_answer()
    {
        $this->assertEquals(6, checksum());
    }
}

?>
