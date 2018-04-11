<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 12:20 AM
 */

namespace FactoryMethod;


class Post extends Notifier
{

    public function validateTo(): bool
    {
        $address = explode(',', $this->to);
        if (count($address) !== 2) {
            return false;
        }

        return true;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new \Exception("Invalid address.");
        }

        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . ".";
    }
}