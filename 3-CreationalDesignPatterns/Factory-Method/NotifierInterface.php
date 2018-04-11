<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 12:06 AM
 */

namespace FactoryMethod;


interface NotifierInterface
{
    public static function getNotifier($notifier, $to);
}