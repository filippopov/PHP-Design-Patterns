<?php
spl_autoload_register(function($class){
    $class = str_replace('Adapter\\', '', $class);
    require_once $class . '.php';
});

$atm = new \Adapter\ATM(500.00);
$atm->withdraw(50);
echo $atm->getBalance() . '<br>';

$adaptedATM = new \Adapter\ATMWithPhoneToUp(500.00);
echo 'Top-up code: ' . $adaptedATM->getToUp(50, time()) . '<br>';
echo $adaptedATM->getBalance();