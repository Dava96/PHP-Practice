<?php
// https://edabit.com/challenge/3QXHLxo9W63r6thLa

class StringMatch
{
    public function match($word1, $word2): int {
        $array1 = str_split($word1);
        $array2 = str_split($word2);

        if (count($array1) > count($array2)) {
            $needle = $array2;
            $haystack = $array1;
        } else {
            $needle = $array1;
            $haystack = $array2;
        }

        $match = 0;
        for ($i = 0; $i < count($needle); $i++) {
            if (isset($needle[$i + 1])) {
                $tneedle = $needle[$i].$needle[$i+1];
                $thaystack = $haystack[$i].$haystack[$i+1];

                if ($tneedle === $thaystack) {
                    $match++;
                }
            }
        }
        return $match;
    }
}

$str = new StringMatch();

echo $str->match("yytaazz", "yyjaaz"); // 3
echo $str->match("Edabit", "ed"); // 1
echo $str->match("", ""); // 0