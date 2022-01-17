<?php

require "TraitLogger.php";

class BankAccount
{
    use TraitLogger;

    private $accountNumber;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created.");
    }

}