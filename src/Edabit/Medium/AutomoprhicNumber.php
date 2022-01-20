<?php

namespace Edabit\Medium;

class AutomoprhicNumber
{
    function automorphic($n)
    {
        if (substr($n ** 2, -strlen($n)) == $n) {
            return true;
        }
        return false;
    }
}