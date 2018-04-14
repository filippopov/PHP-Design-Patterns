<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 11:44
 */

namespace Facade;


class Manufacturer
{
    private $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function build(): string
    {
        return uniqid();
    }
}