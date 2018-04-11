<?php
spl_autoload_register(function($class){
    $class = str_replace('BuilderPattern\\', '', $class);
    require_once $class . '.php';
});

$pizzaBuilder = (new \BuilderPattern\PizzaBuilder(9))
    ->setCheese(true)
    ->setPepperoni(true)
    ->setBacon(false)
    ->build();

$pizza = new \BuilderPattern\Pizza($pizzaBuilder);

echo $pizza->show();
