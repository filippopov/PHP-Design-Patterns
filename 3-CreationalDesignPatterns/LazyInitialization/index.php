<?php

spl_autoload_register(function($class){
    $class = str_replace('LazyInitialization\\', '', $class);
    require_once $class . '.php';
});

$burger = \LazyInitialization\BurgerLazyLoader::getBurger(true, true);
echo $burger->getPrice() . '<br>';
$burger = \LazyInitialization\BurgerLazyLoader::getBurger(true, false);
echo $burger->getPrice() . '<br>';
$burger = \LazyInitialization\BurgerLazyLoader::getBurger(true, true);
echo $burger->getPrice() . '<br>';

echo \LazyInitialization\BurgerLazyLoader::getBurgerCount();

