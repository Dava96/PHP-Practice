<?php
// https://edabit.com/challenge/m7DEpcktfcJPkrRoi
class ObjectsAsKeys
{
    public function seperateKeys($array) {
        ksort($array);

        foreach($array as $key => $value) {
            $keys[] = $key;

            if ($value === true) {
                $values[] = "true";
            } elseif($value === false) {
                $values[] = "false"; // if this isn't included false doesn't appear
            } else {
                $values[] = $value;
            }
        }

        print_r($keys) . "\n";
        print_r($values) . "\n";

    }
}

$test = new ObjectsAsKeys();
$test->seperateKeys(array("a" => 1, "b" => 2, "c" => 3 )); // ["a", "b", "c"], [1, 2, 3]
$test->seperateKeys(array("a" => "Apple", "b" => "Microsoft", "c" => "Google" )); // ["a", "b", "c"], ["Apple", "Microsoft", "Google"]
$test->seperateKeys(array("key1" => true, "key2" => false, "key3" => "undefined" )); // ["key1", "key2", "key3"], [true, false, "undefined"]
