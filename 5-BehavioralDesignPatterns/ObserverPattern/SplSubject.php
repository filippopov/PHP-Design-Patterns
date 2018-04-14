<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 14:06
 */

namespace ObserverPattern;


interface SplSubject
{
    public function attach(SplObserver $observer);

    public function detach(SplObserver $observer);

    public function notify();
}