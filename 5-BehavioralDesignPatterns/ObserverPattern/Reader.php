<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 14:17
 */

namespace ObserverPattern;


class Reader implements SplObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        echo $this->name . ' is reading the article ' . $subject->getContent();
    }
}