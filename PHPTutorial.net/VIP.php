<?php

require "Customer.php";

class VIP extends Customer
{

public function getFormattedName(): string
    {
    return ucwords($this->name);
    }

}

$alex = new VIP("nis");

echo $alex->getFormattedName();