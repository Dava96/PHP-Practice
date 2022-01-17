<?php

require "Person.php";

class French extends Person
{
    public function greet() {
        return "Bonjour";
    }
}

$fr = new French();
echo $fr->greet();