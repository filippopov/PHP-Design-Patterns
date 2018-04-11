<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/9/2018
 * Time: 11:37 PM
 */

namespace SimpleFactory;


class Email extends Notifier
{
    private $from;

    public function __construct(string $to, string $from = 'Anonymous')
    {
        parent::__construct($to);
        $this->from = $from;
    }

    public function validateTo(): bool
    {
        $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);
        return $isEmail ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new Exception("Invalid email address.");
        }

        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . " from " . $this->from . ".";
    }
}