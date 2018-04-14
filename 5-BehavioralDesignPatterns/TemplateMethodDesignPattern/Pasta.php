<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 16:45
 */

namespace TemplateMethodDesignPattern;


abstract class Pasta
{
    public $cheese;

    public function __construct(bool $cheese = true)
    {
        $this->cheese = $cheese;
    }

    public function cook()
    {
        var_dump('Cooked pasta.');

        $this->boilPasta();
        $this->addSauce();
        $this->addMeat();

        if ($this->cheese) {
            $this->addCheese();
        }
    }

    public function boilPasta(): bool
    {
        return true;
    }

    public abstract function addSauce(): bool;

    public abstract function addMeat(): bool;

    public abstract function addCheese(): bool;
}