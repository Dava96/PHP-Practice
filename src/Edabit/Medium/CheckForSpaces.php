<?php

namespace Edabit\Medium;

class CheckForSpaces
{
    public function checkSpaces(string $word): bool {
        $wordArray = str_split($word);

        foreach ($wordArray as $w) {
            if ($w === " ") {
                return true;
            }
        }
        return false;
    }
}