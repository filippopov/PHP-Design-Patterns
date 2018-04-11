<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 11:50 AM
 */

namespace AbstractFactory\Toys;


abstract class Toy
{
    abstract public function getSize(): int;

    abstract public function getPictureName(): string;
}