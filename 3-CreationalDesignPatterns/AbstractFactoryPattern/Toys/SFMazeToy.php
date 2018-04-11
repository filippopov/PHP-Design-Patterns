<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 11:54 AM
 */

namespace AbstractFactory\Toys;


class SFMazeToy extends MazeToy
{
    private $size;
    private $picture;

    public function __construct()
    {
        $this->size = 9;
        $this->picture = 'San Francisco Maze';
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPictureName(): string
    {
        return $this->picture;
    }
}