<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class FormatDateTest extends TestCase
{

    public function testFormat()
    {
        $test = new FormatDate();
        $this->assertEquals("20191211", $test->format("11/12/2019"));
        $this->assertEquals("20221105", $test->format("5/11/2022"));
        $this->assertEquals("20200101", $test->format("1/1/2020"));
        $this->assertEquals("Invalid Date", $test->format("12/31/2019"));
        $this->assertEquals("Invalid Date", $test->format("12/69/429"));
        $this->assertEquals("Invalid Date", $test->format(""));
    }

    public function testIsValidDate()
    {
        $test = new FormatDate();
        $this->assertEquals(true, $test->isValidDate("11/12/2019"));
        $this->assertEquals(false, $test->isValidDate("/2019"));
        $this->assertEquals(true, $test->isValidDate("24/12/2023"));
        $this->assertEquals(false, $test->isValidDate("11/23/2022"));
        $this->assertEquals(false, $test->isValidDate("12/31/2019"));
        $this->assertEquals(false, $test->isValidDate("12/31/2019"));
        $this->assertEquals(false, $test->isValidDate(""));

    }
}
