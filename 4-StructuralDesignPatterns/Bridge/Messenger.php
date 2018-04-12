<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 20:56
 */

namespace Bridge;


interface Messenger
{
    public function send($body);
}