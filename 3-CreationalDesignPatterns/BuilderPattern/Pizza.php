<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 9:21 PM
 */

namespace BuilderPattern;


class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->bacon = $builder->bacon;
    }

    public function show()
    {
        $recipe = $this->size . " inch pizza with the following toppings: ";
        $recipe .= $this->cheese ? "cheese, " : "";
        $recipe .= $this->pepperoni ? "pepperoni, " : "";
        $recipe .= $this->bacon ? "bacon, " : "";
        return $recipe;
    }

}