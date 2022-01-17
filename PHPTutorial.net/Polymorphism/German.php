<?php

require "Person.php";

class German extends Person
{
    public function greet() {
        return "Hallo";
    }
}

$ger = new German();
echo $ger->greet();