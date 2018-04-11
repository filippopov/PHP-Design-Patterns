<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/9/2018
 * Time: 11:42 PM
 */

namespace SimpleFactory;


class NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new \Exception('Notifier must be set');
        }

        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
                break;
            case 'Email':
                return new Email($to, 'Filip');
                break;
            default:
                throw new \Exception('Invalid notifier');
                break;
        }
    }
}