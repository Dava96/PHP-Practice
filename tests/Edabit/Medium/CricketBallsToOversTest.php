<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class CricketBallsToOversTest extends TestCase
{
    public function testTotalOvers() {
        $cricker = new CricketBallsToOvers();
        $this->assertEquals(400, $cricker->totalOvers(2400));
        $this->assertEquals(27.2, $cricker->totalOvers(164));
        $this->assertEquals(157.3, $cricker->totalOvers(945));
        $this->assertEquals(0.5, $cricker->totalOvers(5));
    }

}
