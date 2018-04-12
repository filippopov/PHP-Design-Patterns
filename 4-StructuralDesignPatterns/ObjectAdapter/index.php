<?php
spl_autoload_register(function($class){
    $class = str_replace('ObjectAdapter\\', '', $class);
    require_once $class . '.php';
});

$quote = new \ObjectAdapter\Insurance(10000, 250);
echo $quote->monthlyPremium() . '<br>' . $quote->annualPremium() . '<br>';

$quote = new \ObjectAdapter\InsuranceMarketCompare(10000, 250);
echo $quote->getMonthlyPremium() . '<br>' . $quote->getAnnualPremium();