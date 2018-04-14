<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 10:44
 */

namespace ProxyPattern\IcyApril\PetShop\AnimalFeeder;


use ProxyPattern\IcyApril\PetShop\AnimalFeeder;


class Cat implements AnimalFeeder
{
    private $petName;

    public function __construct(string $petName)
    {
        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel) . ($water ? ' with water.' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    protected function selectFood(int $hungerLevel): string
    {
        switch ($hungerLevel) {
            case 0:
                return 'lamb';
                break;
            case 1:
                return 'chicken';
                break;
            case 3:
                return 'tuna';
                break;
        }
    }
}