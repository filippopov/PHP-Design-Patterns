<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 11:48
 */

namespace Facade;


class SMS
{
    private $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }

    public function send(string $to, string $message)
    {
        if (empty($to)){
            return false;
        }

        if (strlen($message) === 0) {
            return false;
        }

        echo $to . ' received message: ' . $message;
        return true;
    }
}