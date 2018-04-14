<?php

spl_autoload_register(function($class){
    $class = str_replace('Facade\\', '', $class);
    require_once $class . '.php';
});

$childrenToyFactory = new \Facade\ToyShop('1 Factory Lane, Oxfordshire', '07999999999', 5);
$childrenToyFactory->processOrder('8 Midsummer Boulevard', '07123456789');