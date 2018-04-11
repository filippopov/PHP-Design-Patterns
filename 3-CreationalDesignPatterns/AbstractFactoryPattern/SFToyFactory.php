<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 12:11 PM
 */

namespace AbstractFactory;


use AbstractFactory\Toys\SFMazeToy;
use AbstractFactory\Toys\SFPuzzleToy;

class SFToyFactory implements ToyFactory
{
    public $location = 'San Francisco';

    public function makeMaze()
    {
        return new SFMazeToy();
    }

    public function makePuzzle()
    {
        return new SFPuzzleToy();
    }
}