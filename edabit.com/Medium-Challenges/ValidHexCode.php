<?php
// https://edabit.com/challenge/DuQegak2X6ZyYKPER
class ValidHexCode
{
    public function validCode($code) {

        preg_match("/^#[\da-fA-F]{6}$/", $code, $matches);

        if (!empty($matches)) {
            echo "$code is a Match\n";
            print_r($matches);
        } else {
            echo "$code is not a Match\n";
        }
    }
}

$valid = new ValidHexCode();
$valid->validCode("#CD5C5C"); // Match
$valid->validCode("#EAECEE"); // Match
$valid->validCode("#eaecee"); // Match
$valid->validCode("#CD5C58C"); // No Match
$valid->validCode("#CD5C5Z"); // No Match


