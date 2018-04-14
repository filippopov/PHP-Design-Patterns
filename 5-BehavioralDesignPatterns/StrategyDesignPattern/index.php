<?php
spl_autoload_register(function($class){
    $class = str_replace('StrategyDesignPattern\\', '', $class);
    require_once $class . '.php';
});


$processorOne = new \StrategyDesignPattern\RaiseNumber(new \StrategyDesignPattern\Square());
echo $processorOne->raise(5) . '<br>';

$processorTwo = new \StrategyDesignPattern\RaiseNumber(new \StrategyDesignPattern\Cube());
echo $processorTwo->raise(5);

