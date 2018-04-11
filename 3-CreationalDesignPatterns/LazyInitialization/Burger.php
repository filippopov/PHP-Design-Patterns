<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 8:17 PM
 */

namespace LazyInitialization;


class Burger
{
    private $cheese;
    private $chips;
    private $price;

    public function __construct(bool $cheese, bool $chips)
    {
        $this->cheese = $cheese;
        $this->chips = $chips;

        $this->price = rand(1, 2.5) + ($this->cheese ? 0.5 : 0) + ($this->chips ? 1 : 0);
    }

    public function getPrice()
    {
        return $this->price;
    }
}