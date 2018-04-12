<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 13.4.2018 г.
 * Time: 0:16
 */

namespace Bridge;


abstract class Device implements Transmitter
{
    /**
     * @var Messenger
     */
    protected $sender;

    public function setSender(Messenger $sender)
    {
        $this->sender = $sender;
    }
}