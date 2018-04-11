<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 12:13 PM
 */

namespace AbstractFactory;


use AbstractFactory\Toys\UKMazeToy;
use AbstractFactory\Toys\UKPuzzleToy;

class UKToyFactory implements ToyFactory
{
    public $location = 'United Kingdom';

    public function makeMaze()
    {
        return new UKMazeToy();
    }

    public function makePuzzle()
    {
        return new UKPuzzleToy();
    }
}