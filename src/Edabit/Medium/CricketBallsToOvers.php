<?php
namespace Edabit\Medium;

class CricketBallsToOvers
{
    public function totalOvers(int $balls): string {

        $overs = floor($balls / 6);
        $remainingBalls = $balls % 6;
        return $overs . ($remainingBalls ? ".$remainingBalls" : "");
    }
}