<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 12:22 AM
 */

namespace FactoryMethod;


class CourierNotifierFactory implements NotifierInterface
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new \Exception('Notifier must be set');
        }

        switch ($notifier) {
            case 'Post':
                return new Post($to);
                break;
            default:
                throw new \Exception('Invalid Notifier');
                break;
        }
    }
}