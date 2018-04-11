<?php
spl_autoload_register(function($class){
    $class = str_replace('FactoryMethod\\', '', $class);
    require_once $class . '.php';
});

$sms = \FactoryMethod\ElectronicNotifierFactory::getNotifier('SMS', '07111111111');
echo $sms->sendNotification();
echo '<br>';

$email = \FactoryMethod\ElectronicNotifierFactory::getNotifier('Email', 'toshko@avv.bg');
echo $email->sendNotification();
echo '<br>';

$post = \FactoryMethod\CourierNotifierFactory::getNotifier('Post', '10 Downing Street, SW1A 2A');
echo $post->sendNotification();