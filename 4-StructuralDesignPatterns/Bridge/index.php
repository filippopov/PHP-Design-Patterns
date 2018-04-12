<?php
spl_autoload_register(function($class){
    $class = str_replace('Bridge\\', '', $class);
    require_once $class . '.php';
});

$phone = new \Bridge\Phone();
$phone->setSender(new \Bridge\SMS());
$phone->send('Hello There');