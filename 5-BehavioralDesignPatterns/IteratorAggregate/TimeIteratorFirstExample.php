<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 15:26
 */

namespace IteratorAggregate;


use Traversable;

class TimeIteratorFirstExample implements \IteratorAggregate
{
    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator([
            'property1' => 1,
            'property2' => 2,
            'property3' => 3
        ]);
    }
}