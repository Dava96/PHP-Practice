<?php

namespace Edabit\Medium;

use PHPUnit\Framework\TestCase;

class FruitSaladTest extends TestCase
{

    public function testSlice()
    {
        $fruit = new FruitSalad();
        $this->assertEquals($fruit->slice(['apple', 'pear', 'grapes']), 'apargrapepesple');
        $this->assertEquals($fruit->slice(['banana', 'kiwi', 'strawberry', 'blueberries']), 'anabanberryblueberrieskistrawwi');
        $this->assertEquals($fruit->slice(['raspberries', 'mango']), 'erriesmangoraspb');
        $this->assertEquals($fruit->slice(['banana']), 'anaban');
    }
}
