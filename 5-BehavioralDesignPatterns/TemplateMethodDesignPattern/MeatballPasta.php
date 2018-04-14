<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 16:50
 */

namespace TemplateMethodDesignPattern;


class MeatballPasta extends Pasta
{
    public function addSauce(): bool
    {
        var_dump('Added some sauce');
        return true;
    }

    public function addMeat(): bool
    {
        var_dump('Add meatballs');
        return true;
    }

    public function addCheese(): bool
    {
        var_dump('Add cheese');
        return true;
    }
}