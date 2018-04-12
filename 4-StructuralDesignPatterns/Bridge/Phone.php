<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 13.4.2018 г.
 * Time: 0:20
 */

namespace Bridge;


class Phone extends Device
{
    public function send($body)
    {
        $body .= '<br>' . 'Sent from a phone.';
        return $this->sender->send($body);
    }
}