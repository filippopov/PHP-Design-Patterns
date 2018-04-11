<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 11:46 AM
 */

namespace AbstractFactory;


interface ToyFactory
{
    public function makeMaze();
    public function makePuzzle();
}