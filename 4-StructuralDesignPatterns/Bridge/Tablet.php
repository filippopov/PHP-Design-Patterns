<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 13.4.2018 г.
 * Time: 0:24
 */

namespace Bridge;


class Tablet extends Device
{

    public function send($body)
    {
        $body .= '<br>' . 'Send from tablet';
        return $this->sender->send($body);
    }
}