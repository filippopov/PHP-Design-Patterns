<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/9/2018
 * Time: 11:19 PM
 */

namespace FactoryMethod;


abstract class Notifier
{
    protected $to;

    public function __construct(string $to)
    {
        $this->to = $to;
    }

    abstract public function validateTo(): bool;

    abstract public function sendNotification(): string;
}