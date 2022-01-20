<?php

namespace Edabit\Medium;
// https://edabit.com/challenge/hA8BLACQf7SNW2PGy
class HurdleJumper
{
    public function jump($hurdle, $jumpHeight) {
        if ($jumpHeight >= count($hurdle) || empty($hurdle)) {
            return true;
        }
        return false;
    }
}