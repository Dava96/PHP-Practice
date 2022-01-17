<?php

class BankAccount
{

    public float $balance;

    function __construct(float $balance) {
        $this->balance = $balance;
    }
}

$account = new BankAccount(0);
$account2 = new BankAccount(100);
var_dump($account->balance);
var_dump($account2->balance);