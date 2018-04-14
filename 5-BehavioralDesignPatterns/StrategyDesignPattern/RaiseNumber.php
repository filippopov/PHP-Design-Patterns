<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 17:55
 */

namespace StrategyDesignPattern;


class RaiseNumber
{
    /**
     * @var Power
     */
    private $strategy;

    public function __construct(Power $strategy)
    {
        $this->strategy = $strategy;
    }

    public function raise(int $number)
    {
        return $this->strategy->raise($number);
    }
}