<?php
// https://edabit.com/challenge/jKurd2ziSE3CZinbL
class CarTImer
{
    public function timer($timeInMins) {
        $minsInHour = 60;

        $hours = ($timeInMins / $minsInHour);
        $mins = ($timeInMins % $minsInHour);

        if ($timeInMins < 0) {
            echo "Invalid Time Entered...";
        } elseif ($hours < 10 && $mins < 10) {
            printf("%s%d:%s%d\n", 0, $hours, 0, $mins);
        } elseif ($hours < 10) {
            printf("%s%d:%d\n", 0, $hours, $mins);
        } elseif ($mins < 10) {
            printf("%d:%s%d\n",  $hours, 0, $mins);
        } else {
            printf("%d:%d\n", $hours, $mins);
        }
    }
}

$car = new CarTImer();
$car->timer(240); // 04:00
$car->timer(61); // 01:01
$car->timer(4); // 00:04
$car->timer(808); // 13:28
$car->timer(2455); // 40:55
$car->timer(-2300420); // Invalid Time