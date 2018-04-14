<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 10:40
 */

namespace ProxyPattern\IcyApril\PetShop;


interface AnimalFeeder
{
    public function __construct(string $petName);

    public function dropFood(int $hungerLevel, bool $water = false): string;

    public function displayFood(int $hungerLevel): string;
}