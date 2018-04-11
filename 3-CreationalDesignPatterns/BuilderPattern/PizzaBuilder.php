<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 9:16 PM
 */

namespace BuilderPattern;


class PizzaBuilder
{
    public $size;
    public $cheese = false;
    public $pepperoni = false;
    public $bacon = false;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function setCheese(bool $present) : PizzaBuilder
    {
        $this->cheese = $present;
        return $this;
    }

    public function setPepperoni(bool $present): PizzaBuilder
    {
        $this->pepperoni = $present;
        return $this;
    }

    public function setBacon(bool $present): PizzaBuilder
    {
        $this->bacon = $present;
        return $this;
    }

    public function build(): PizzaBuilder
    {
        return $this;
    }
}