<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 10:19
 */

namespace Adapter;


class ATM
{
    private $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function withdraw(float $amount): float
    {
        if ($this->reduceBalance($amount) === true) {
            return $amount;
        } else {
            throw new \Exception("Couldn't withdraw money.");
        }
    }

    protected function reduceBalance(float $amount)
    {
        if ($amount >= $this->balance) {
            return false;
        }

        $this->balance -= $amount;
        return true;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}