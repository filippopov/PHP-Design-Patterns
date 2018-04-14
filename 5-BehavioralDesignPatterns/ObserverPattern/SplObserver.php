<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 14:08
 */

namespace ObserverPattern;


interface SplObserver
{
    public function update(SplSubject $subject);
}