<?php
spl_autoload_register(function($class){
    $class = str_replace('ChainOfResponsibility\\', '', $class);
    require_once $class . '.php';
});

$associate = new \ChainOfResponsibility\AssociatePurchaser();
$manager = new \ChainOfResponsibility\ManagerPurchaser();
$director = new \ChainOfResponsibility\DirectorPurchaser();
$board = new \ChainOfResponsibility\BoardPurchaser();

$associate->setNextPurchaser($manager);
$manager->setNextPurchaser($director);
$director->setNextPurchaser($board);

$associate->buy(11000);

