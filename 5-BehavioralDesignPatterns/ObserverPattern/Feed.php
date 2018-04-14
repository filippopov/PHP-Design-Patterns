<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 14:09
 */

namespace ObserverPattern;


class Feed implements SplSubject
{
    private $name;
    /**
     * @var SplObserver[]
     */
    private $observer = [];
    private $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(SplObserver $observer)
    {
        $this->observer[spl_object_hash($observer)] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        unset($this->observer[spl_object_hash($observer)]);
    }

    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return $this->content . ' on ' . $this->name . '.';
    }

    public function notify()
    {
        foreach ($this->observer as $value) {
            $value->update($this);
        }
    }
}