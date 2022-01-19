<?php
namespace Edabit\Medium;

class AbsoluteSum {

    public function absolute($numbers) {
        $total = 0;
        foreach ($numbers as $number) {
            $total += abs($number);
        }
        return $total;
    }
}