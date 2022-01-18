<?php
// https://edabit.com/challenge/q5xJcpvsm4NfHyosP
class EvenAndLast
{
    public function lastAndEven($array): int {
        $answer = 0;
        $lastIndex = 0;
        if (!empty($array)) {
            $lastIndex = $array[count($array)-1];
            for ($i = 0; $i < count($array); $i += 2) {
                $answer += $array[$i];
            }
            return $answer * $lastIndex;
        }
        return 0;
    }
}
$even = new EvenAndLast();
echo $even->lastAndEven([2, 3, 4, 5]).  "\n"; // 30
echo $even->lastAndEven([1, 3, 3, 1, 10]).  "\n"; // 14
echo $even->lastAndEven([5, 1, 3, 2, 2]).  "\n"; //
echo $even->lastAndEven([]).  "\n"; //
