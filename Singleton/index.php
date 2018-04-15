<?php
spl_autoload_register(function($class){
    $class = str_replace('Singleton\\', '', $class);
    require_once $class . '.php';
});

$user = \Singleton\UserFactory::Instance();
$user->setValue(5);
$user2 = \Singleton\UserFactory::Instance();

var_dump($user2, $user);
$user2->setValue(10);
var_dump($user2, $user);