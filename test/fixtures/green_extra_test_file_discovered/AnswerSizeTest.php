<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class AnswerSizeTest extends TestCase
{
    public function testAnswer_has_two_digits()
    {
        $this->assertEquals(2, strlen((string)answer()));
    }
}

?>
