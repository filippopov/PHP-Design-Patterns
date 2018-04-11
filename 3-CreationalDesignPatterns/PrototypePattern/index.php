<?php
spl_autoload_register(function($class){
    $class = str_replace('PrototypePattern\\', '', $class);
    require_once $class . '.php';
});

$prototypeStudent = new \PrototypePattern\Student();
$prototypeStudent->setName('Filip');
$prototypeStudent->setYear(1984);
$prototypeStudent->setGrade('A');

var_dump($prototypeStudent);

$theLazzyChild = clone $prototypeStudent;
$theLazzyChild->setYear(1990);
$theLazzyChild->setName('Ivan');
$theLazzyChild->setGrade('B');
var_dump($theLazzyChild);

$theChildProdigy = clone $prototypeStudent;
$theChildProdigy->setYear(1991);
$theChildProdigy->setName('Dragan');
$theChildProdigy->setGrade('C');
$theChildProdigy->danceSkils = 'Outstanding';
$theChildProdigy->dance = function(string $style) {
    return "Dancing $style style.";
};

var_dump($theChildProdigy);
var_dump($theChildProdigy->dance->__invoke('Pogo'));