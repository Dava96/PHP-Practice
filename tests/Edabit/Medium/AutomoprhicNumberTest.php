<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class AutomoprhicNumberTest extends TestCase
{

    public function testAutomprhicNumber() {
        $test = new AutomoprhicNumber();
        $this->assertEquals($test->automorphic(1), true);
        $this->assertEquals($test->automorphic(3), false);
        $this->assertEquals($test->automorphic(6), true);
        $this->assertEquals($test->automorphic(9), false);
        $this->assertEquals($test->automorphic(25), true);
        $this->assertEquals($test->automorphic(53), false);
        $this->assertEquals($test->automorphic(76), true);
        $this->assertEquals($test->automorphic(95), false);
        $this->assertEquals($test->automorphic(100), false);
        $this->assertEquals($test->automorphic(625), true);
        $this->assertEquals($test->automorphic(225), false);
    }

}
