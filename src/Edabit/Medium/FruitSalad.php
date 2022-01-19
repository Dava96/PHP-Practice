<?php

namespace Edabit\Medium;
// https://edabit.com/challenge/Gb3xJrLLMYQ6RtjeF
class FruitSalad
{
    public function slice($fruits) {
        $choppedFruit = [];
        foreach ($fruits as $fruit) {

            $choppedFruit[] = substr($fruit, 0, strlen($fruit) / 2);
            $choppedFruit[] = substr($fruit, strlen($fruit) / 2);
        }
        sort($choppedFruit, SORT_STRING);


        return implode('', $choppedFruit);
    }
}
$t = new FruitSalad();
$t->slice(["apple", "pear", "grapes"]);
echo $t->slice(["raspberries", "mango"]);