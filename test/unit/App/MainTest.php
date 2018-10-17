<?php
/**
 * Created by PhpStorm.
 * User: boba
 * Date: 10/16/18
 * Time: 9:55 PM
 */

namespace App;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{

    public function testRun()
    {
        $obj = new Main();
        $this->assertEquals(2, $obj->run(0, 0));
    }
}
