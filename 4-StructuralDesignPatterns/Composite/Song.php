<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 19:35
 */

namespace Composite;


class Song implements Music
{
    private $id;
    private $name;

    public function __construct(string $name)
    {
        $this->id = uniqid();
        $this->name = $name;
    }

    public function play()
    {
        printf("Playing song #{$this->id}, {$this->name}<br>");
    }
}