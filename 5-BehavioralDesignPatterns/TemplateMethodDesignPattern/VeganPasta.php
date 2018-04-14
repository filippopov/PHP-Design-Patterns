<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 16:58
 */

namespace TemplateMethodDesignPattern;


class VeganPasta extends Pasta
{

    public function addSauce(): bool
    {
        var_dump('Added tomato sauce');
        return true;
    }

    public function addMeat(): bool
    {
        return false;
    }

    public function addCheese(): bool
    {
       return false;
    }
}