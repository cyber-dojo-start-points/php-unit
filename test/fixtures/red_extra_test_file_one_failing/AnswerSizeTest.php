<?php
require_once 'Hiker.php';

use PHPUnit\Framework\TestCase;

class AnswerSizeTest extends TestCase
{
    public function testAnswer_has_three_digits()
    {
        $this->assertEquals(3, strlen((string)answer()));
    }
}

?>
