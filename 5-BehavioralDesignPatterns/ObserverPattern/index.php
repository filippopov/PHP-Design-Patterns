<?php
spl_autoload_register(function($class){
    $class = str_replace('ObserverPattern\\', '', $class);
    require_once $class . '.php';
});

$newspaper = new \ObserverPattern\Feed('Junade.com');

$allen = new \ObserverPattern\Reader('Mark');
$jim = new \ObserverPattern\Reader('Lily');
$linda = new \ObserverPattern\Reader('Caitlin');

$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

$newspaper->detach($linda);

$newspaper->breakOutNews('PHP Design Patterns');