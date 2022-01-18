<?php
//https://edabit.com/challenge/tPwEv6cBu98TTom6q
class MapLetters
{
    public function mapToArray($string): array {
        $result = [];
        if ($string) {

            $splitArray = str_split($string);
            foreach($splitArray as $key => $w)
                $result[$w] [] = $key;
        }
        return $result;
    }
}

$map = new MapLetters();
print_r($map->mapToArray("doggy"));
print_r($map->mapToArray("froggy"));
print_r($map->mapToArray("Smile"));
print_r($map->mapToArray("Smile :)"));