<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class HikerTest extends TestCase
{
    // PHPUnit finds a test by its name, so this one is never run and the
    // class is left with none at all.
    public function checkLife_the_universe_and_everything()
    {
        $this->assertEquals(42, answer());
    }
}

?>
