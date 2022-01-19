<?php

// Challenge - https://edabit.com/challenge/YcLfDdW2k6iSdvH4P
class FindBob
{
    public function find($array): int {
        for ($i = 0; $i < count($array); $i++) {
            if (strtolower($array[$i]) === "bob") {
                return $i;
            }
        }
        return -1;
    }
}

$test1 = ["Jimmy", "Layla", "Bob"]; // 2
$test2 = ["Bob", "Layla", "Kaitlyn", "Patricia"]; // 0
$test3 = ["Jimmy", "Layla", "James"]; // -1
$test4 = ["James", "Bimmy", "Bob"]; // 2

$findBob = new FindBob();

echo "Bob is at index: " . $findBob->find($test1) . "\n";
echo "Bob is at index: " . $findBob->find($test2) . "\n";
echo "Bob is at index: " . $findBob->find($test3) . "\n";
echo "Bob is at index " . $findBob->find($test4) . "\n";