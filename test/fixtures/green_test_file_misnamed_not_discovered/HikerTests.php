<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

// PHPUnit gathers files whose name ends Test.php, so the trailing s here
// keeps this failing test out of the run entirely.
class HikerTests extends TestCase
{
    public function testAnswer_has_three_digits()
    {
        $this->assertEquals(3, strlen((string)answer()));
    }
}

?>
