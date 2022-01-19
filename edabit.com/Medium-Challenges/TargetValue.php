<?php
//https://edabit.com/challenge/CLBo7rH75jfMm9rBD
class TargetValue
{
    public function target(array $a1, array $a2, int $target): string {
        if (empty($a1) || empty($a2)) {
            return "false\n";
        }

        for ($i = 0; $i < count($a1); $i++) {
            for ($j = 0; $j < count($a2); $j++) {
                $answer = $a1[$i] + $a2[$j];
                if ($answer === $target) {
                    return "true\n";
                }
            }
        }
        return "false\n";
    }
}

$t = new TargetValue();
echo $t->target([1, 2], [4, 5, 6], 5); // true
echo $t->target([1, 2], [4, 5, 6], 3); // false
echo $t->target([1, 2], [4, 5, 6], 9); // false
echo $t->target([1, 2], [4, 5, 6], 8); // true
