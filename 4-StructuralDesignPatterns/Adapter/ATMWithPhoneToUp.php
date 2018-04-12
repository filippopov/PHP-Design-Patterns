<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 10:32
 */

namespace Adapter;


class ATMWithPhoneToUp extends ATM
{
    public function getToUp(float $amount, int $time): string
    {
        if ($this->reduceBalance($amount) === true){
            return $this->generateTopUpCode($amount, $time);
        } else {
            throw new \Exception("Couldn't withdraw money.");
        }
    }

    private function generateTopUpCode(float $amount, int $time): string
    {
        return $amount . $time . rand(0, 1000);
    }
}