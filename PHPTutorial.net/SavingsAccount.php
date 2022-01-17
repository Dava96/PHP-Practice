<?php
require "Account.php";
class SavingsAccount extends Account
{
    private $interestRate;

    public function __construct($accountNumber, $balance, $interestRate)
    {
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate) {
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $interest = $this->interestRate * $this->balance;

        $this->deposit($interest);
    }

    public function getInfo() {
        return "This account is a savings account, the balance is: $this->balance with a interest rate of $this->interestRate. \n";
    }
}

$account = new SavingsAccount(200, 300, 11);
$account1 = new Account(200, 500);
$account->deposit(120);
echo $account->getInfo();
echo $account1->getInfo();