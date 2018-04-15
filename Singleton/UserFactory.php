<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 15.4.2018 г.
 * Time: 11:14
 */

namespace Singleton;


class UserFactory
{
    private static $inst = null;
    private $value = 0;

    public static function Instance()
    {
        if (self::$inst === null) {
            self::$inst = new UserFactory();
        }

        return self::$inst;
    }

    private function __construct()
    {
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}