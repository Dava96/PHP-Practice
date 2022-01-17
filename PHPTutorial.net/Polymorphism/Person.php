<?php

abstract class Person
{
    abstract public function greet();

    function greeting($people) {
        foreach ($people as $person) {
            echo $person->greet() . "<br>";
        }
    }
}