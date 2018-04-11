<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 8:22 PM
 */

namespace LazyInitialization;


class BurgerLazyLoader
{
    private static $instance = [];

    public static function getBurger(bool $cheese, bool $chips): Burger
    {
        if (!isset(self::$instance[$cheese . $chips])) {
            self::$instance[$cheese . $chips] = new Burger($cheese, $chips);
        }

        return self::$instance[$cheese . $chips];
    }

    public static function getBurgerCount(): int
    {
        return count(self::$instance);
    }
}