<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 17:55
 */

namespace StrategyDesignPattern;


class Cube implements Power
{
    public function raise(int $number): int
    {
        return pow($number, 3);
    }
}