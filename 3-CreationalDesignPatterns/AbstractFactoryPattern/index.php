<?php
spl_autoload_register(function($class) {
    $class = str_replace('AbstractFactory\\', '', $class);
    require_once $class . '.php';
});

$sfToyFactory = new \AbstractFactory\SFToyFactory();
var_dump($sfToyFactory->makeMaze());
echo '<br>';
var_dump($sfToyFactory->makePuzzle());
echo '<br>';

$ukToyFactory = new \AbstractFactory\UKToyFactory();
var_dump($ukToyFactory->makeMaze());
echo '<br>';
var_dump($ukToyFactory->makePuzzle());
echo '<br>';