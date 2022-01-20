<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class HurdleJumperTest extends TestCase
{

    public function testJump()
    {
        $jumper = new HurdleJumper();
        $this->assertEquals(true, $jumper->jump([1], 5));
        $this->assertEquals(false, $jumper->jump([2,3,4], 2));
        $this->assertEquals(false, $jumper->jump([1,5,4,3,1], 2));
        $this->assertEquals(true, $jumper->jump([], 5));
    }
}
