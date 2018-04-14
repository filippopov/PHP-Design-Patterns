<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 11:46
 */

namespace Facade;


class Post
{
    private $sender;

    public function __construct(string $sender)
    {
        $this->sender = $sender;
    }

    public function dispatch(string $item, string $to)
    {
        if (strlen($item) !== 13) {
            return false;
        }

        if (empty($to)) {
            return false;
        }

        return true;
    }
}