<?php
spl_autoload_register(function($class){
    $class = str_replace('ProxyPattern\\', '', $class);
    require_once $class . '.php';
});


$felix = new \ProxyPattern\IcyApril\PetShop\AnimalFeederProxy('Cat', 'Felix');
echo $felix->displayFood(1) . '<br>';
echo $felix->dropFood(1, true) . '<br>';


$brain = new \ProxyPattern\IcyApril\PetShop\AnimalFeederProxy('Dog', 'Brain');
echo $brain->displayFood(1) . '<br>';
echo $brain->dropFood(1, true);
