<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 17:54
 */

namespace StrategyDesignPattern;


class Square implements Power
{
    public function raise(int $number): int
    {
        return pow($number, 2);
    }
}