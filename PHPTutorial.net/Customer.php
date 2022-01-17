<?php

class Customer
{
    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName($nameEntered)
    {
        $nameEntered = trim($nameEntered);
        if ($nameEntered !== "") {
            $this->name = $nameEntered;
            return true;
        }
        return false;
    }
}
