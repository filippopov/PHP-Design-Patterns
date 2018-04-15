<?php

spl_autoload_register(function($class){
    $class = str_replace('SpecificationDesignPattern\\', '', $class);
    require_once $class . '.php';
});

$workers = [];

$workers['A'] = new \SpecificationDesignPattern\StdClass();
$workers['A']->title = 'Developer';
$workers['A']->department = 'Engineering';
$workers['A']->salary = 50000;

$workers['B'] = new \SpecificationDesignPattern\StdClass();
$workers['B']->title = 'Data Analyst';
$workers['B']->department = 'Engineering';
$workers['B']->salary = 30000;

$workers['C'] = new \SpecificationDesignPattern\StdClass();
$workers['C']->title = 'Personal Assistant';
$workers['C']->department = 'CEO';
$workers['C']->salary = 25000;

$isEngineer = new \SpecificationDesignPattern\EmployeeIsEngineer();

foreach ($workers as $id => $worker) {
    if ($isEngineer->isSatisfiedBy($worker)) {
        var_dump($id);
    }
}