<?php

namespace Edabit\Medium;
// https://edabit.com/challenge/zcqQ4TDnLRqTtzrNy
class FormatDate
{
    public function format($date) {
        if (empty($date) || !$this->isValidDate($date)) {
            return "Invalid Date";
        }

        return date("Ydm", strtotime($date));
    }

    public function isValidDate($date) {
        $dateArray = explode("/", $date);

        for ($i = 0; $i < count($dateArray); $i++) {
            if (empty($dateArray[$i])) {
                return false;
            }
        }
        return checkdate($dateArray[1], $dateArray[0], $dateArray[2]);
    }
}