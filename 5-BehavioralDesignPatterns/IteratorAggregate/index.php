<?php

spl_autoload_register(function($class){
    $class = str_replace('IteratorAggregate\\', '', $class);
    require_once $class . '.php';
});

$time = new \IteratorAggregate\TimeIteratorFirstExample();

foreach ($time as $key => $value) {
    var_dump($key, $value);
}

echo 'End first example' . '<br>';
$timeSecond = new \IteratorAggregate\TimeIteratorSecondExample(time());

foreach ($timeSecond as $key => $value) {
    var_dump($key, $value);
}