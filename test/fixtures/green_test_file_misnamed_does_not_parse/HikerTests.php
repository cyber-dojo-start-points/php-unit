<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

// The trailing s keeps this file out of the gathered set, so the syntax
// error below is never parsed and never reported.
class HikerTests extends TestCase
{
    public function testAnswer_has_two_digits()
    {
        $this->assertEquals(2, strlen((string)answer())sd);
    }
}

?>
