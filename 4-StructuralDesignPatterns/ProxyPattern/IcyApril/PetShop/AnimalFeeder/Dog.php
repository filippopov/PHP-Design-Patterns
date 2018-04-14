<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 10:59
 */

namespace ProxyPattern\IcyApril\PetShop\AnimalFeeder;


use ProxyPattern\IcyApril\PetShop\AnimalFeeder;

class Dog
{
    private $petName;

    public function __construct(string $petName)
    {
        if (strlen($petName) > 10) {
            throw new \Exception('Name too long.');
        }

        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel) . ($water ? ' with water' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    protected function selectFood(int $hungerLevel): string
    {
        if ($hungerLevel == 3){
            return 'chicken and vegetables';
        } elseif (date('H') < 10){
            return 'turkey and beef';
        } else {
            return 'chicken and rice';
        }
    }
}