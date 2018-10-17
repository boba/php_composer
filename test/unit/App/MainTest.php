<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testGimmeABigNumber()
    {
        $obj = new Main();
        $this->assertEquals('16546935672486511086530865490.0000000000', $obj->gimmeABigNumber());
    }

    public function testGimmeALittleNumber()
    {
        $obj = new Main();
        $this->assertEquals(14, $obj->gimmeALittleNumber());
    }
}
