<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 15:37
 */

namespace IteratorAggregate;


use Traversable;

class TimeIteratorSecondExample implements \IteratorAggregate
{
    public $weekAgo;
    public $yesterday;
    public $now;
    public $tomorrow;
    public $nextWeek;

    public function __construct(int $time)
    {
        $this->weekAgo = $time - 604800;
        $this->yesterday = $time - 86400;
        $this->now = $time;
        $this->tomorrow = $time + 86400;
        $this->nextWeek = $time + 604800;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this);
    }
}