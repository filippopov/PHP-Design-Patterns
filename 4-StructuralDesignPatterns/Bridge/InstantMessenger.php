<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 13.4.2018 г.
 * Time: 0:11
 */

namespace Bridge;


class InstantMessenger implements Messenger
{

    public function send($body)
    {
        echo "InstantMessenger: $body";
    }
}