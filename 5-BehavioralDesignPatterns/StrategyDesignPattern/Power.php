<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 17:53
 */

namespace StrategyDesignPattern;


interface Power
{
    public function raise(int $number): int;
}