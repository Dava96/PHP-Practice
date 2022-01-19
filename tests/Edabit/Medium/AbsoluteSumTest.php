<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class AbsoluteSumTest extends TestCase
{

    public function testAbsolute()
    {
        $absolute = new AbsoluteSum();
        $this->assertEquals(25, $absolute->absolute([2, -1, 4, 8, 10]));
        $this->assertEquals(22, $absolute->absolute([-3, -4, -10, -2, -3]));
        $this->assertEquals(30, $absolute->absolute([2, 4, 6, 8, 10]));
        $this->assertEquals(1, $absolute->absolute([-1]));
    }
}
