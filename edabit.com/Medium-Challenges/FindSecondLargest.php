<?php
// https://edabit.com/challenge/LR7Pqhp7MLMvm4yiJ
class FindSecondLargest
{
    public function find2ndLargest($array): int {
       rsort($array); // I did try and implement a sorting algorithm but then find out that this exists...
        return $array[1];
    }
}

$large = new FindSecondLargest();

echo $large->find2ndLargest([10, 40, 30, 20, 50]);