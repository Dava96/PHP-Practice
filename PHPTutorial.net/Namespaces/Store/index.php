<?php
require '../src/Model/Customer.php';

use Model\Customer;

$customer = new Customer('Bob');
echo $customer->getName();