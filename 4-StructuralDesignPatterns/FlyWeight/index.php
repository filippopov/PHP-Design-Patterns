<?php
spl_autoload_register(function($class){
    $class = str_replace('FlyWeight\\', '', $class);
    require_once $class . '.php';
});

$colours = [
    'red', 'blue', 'green', 'black', 'white', 'orange'
];

$factory = new \FlyWeight\ShapeFactory();

for ($i = 0; $i < 100; $i++) {
    $randomColors = $colours[array_rand($colours)];

    /**
     * @var \FlyWeight\Circle $circle
     */
    $circle = $factory->getCIrcle($randomColors);
    $circle->setX(rand(0, 100));
    $circle->setY(rand(0, 100));
    $circle->setRadius(rand(0, 100));

    $circle->draw();
}