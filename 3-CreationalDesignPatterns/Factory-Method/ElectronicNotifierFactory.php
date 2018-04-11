<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/10/2018
 * Time: 12:08 AM
 */

namespace FactoryMethod;


class ElectronicNotifierFactory implements NotifierInterface
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