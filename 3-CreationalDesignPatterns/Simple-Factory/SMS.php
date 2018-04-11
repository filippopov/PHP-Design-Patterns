<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/9/2018
 * Time: 11:23 PM
 */

namespace SimpleFactory;


class SMS extends Notifier
{
    public function validateTo(): bool
    {
        $pattern = '/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/';
        $isPhone = preg_match($pattern, $this->to);
        return $isPhone ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new \Exception('Invalid phone number.');
        }

        $notificationClass = get_class($this);
        return "This is $notificationClass to {$this->to}.";
    }
}