<?php
spl_autoload_register(function($class){
    $class = str_replace('TemplateMethodDesignPattern\\', '', $class);
    require_once $class . '.php';
});

var_dump('Meatball Pasta');
$dish = new \TemplateMethodDesignPattern\MeatballPasta(true);
$dish->cook();

var_dump('Vegan Pasta');
$veganPasta = new \TemplateMethodDesignPattern\VeganPasta(true);
$veganPasta->cook();