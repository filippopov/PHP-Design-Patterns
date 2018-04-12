<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 12:02
 */

namespace FlyWeight;


class ShapeFactory
{
    private $shapeMap = [];

    public function getCIrcle(string $color)
    {
        $circle = 'Circle' . '_' . $color;
        if (!isset($this->shapeMap[$circle])) {
            echo "Creating a $color circle.";
            echo '<br>';
            $this->shapeMap[$circle] = new Circle($color);
        }

        return $this->shapeMap[$circle];
    }
}