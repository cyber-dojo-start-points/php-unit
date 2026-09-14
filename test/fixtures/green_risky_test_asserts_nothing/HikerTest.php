<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class HikerTest extends TestCase
{
    // The learner called answer() but never asserted anything about what it
    // returned. PHPUnit names the test risky, exits 0, and the colour is
    // green even though nothing was checked.
    public function testLife_the_universe_and_everything()
    {
        answer();
    }
}

?>
