<?php

namespace Edabit\Medium;
// https://edabit.com/challenge/yzAy45WMBFkQgcDwY
class NoDuplicates
{
    public function removeDupes($numbers) {
        $dupeFree = [];
        if (empty($numbers)) {
            return "Invalid Input";
        }

        foreach ($numbers as $number) {
            foreach ($dupeFree as $dupeFreeNumber) {
                if ($dupeFreeNumber === $number) {
                    continue 2;
                }
            }
            $dupeFree[] = $number;
        }

        print_r($dupeFree);
        print_r($numbers);
    }
}
$t = new NoDuplicates();
$t->removeDupes([2,3,4,5,5,5,5]);