<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 13.4.2018 г.
 * Time: 0:12
 */

namespace Bridge;


class SMS implements Messenger
{

    public function send($body)
    {
        echo "SMS: $body";
    }
}