<?php

require "Person.php";
require "French.php";
require "German.php";

class English extends Person
{
    public function greet() {
        return "Hello";
    }
}

$eng = new English();
echo $eng->greet();
$people = [
    new English(),
    new French(),
    new German()
];

$this->greeting($people);