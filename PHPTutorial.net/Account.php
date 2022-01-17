<?php

class Account
{
    public $accountNumber;
    public $balance;

    function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
}

    public function getAccountNumber() {
        return "Your account number is: $this->accountNumber \n";
    }

    public function getBalance() {
        return "Your account balance is: $$this->balance \n";
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "You withdrew $amount \n";
        }
    }

    public function getInfo() {
        return "This account is a basic account, the balance of this account is: $this->balance. \n";
    }



}

