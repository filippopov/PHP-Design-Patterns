<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 13.4.2018 г.
 * Time: 0:13
 */

namespace Bridge;


interface Transmitter
{
    public function setSender(Messenger $sender);

    public function send($body);
}