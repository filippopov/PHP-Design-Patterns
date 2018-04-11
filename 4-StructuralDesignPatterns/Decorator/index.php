<?php
spl_autoload_register(function($class){
    $class = str_replace('Decorator\\', '', $class);
    require_once $class . '.php';
});

$printBook = new \Decorator\PrintBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");
echo $printBook->getText();