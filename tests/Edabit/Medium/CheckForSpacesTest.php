<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class CheckForSpacesTest extends TestCase
{

    public function testCheckSpaces()
    {
        $spaces = new CheckForSpaces();
        $this->assertEquals(false, $spaces->checkSpaces("foo"));
        $this->assertEquals(true, $spaces->checkSpaces("foo bar"));
        $this->assertEquals(false, $spaces->checkSpaces("can"));
        $this->assertEquals(true, $spaces->checkSpaces("mobile phone"));
    }
}
