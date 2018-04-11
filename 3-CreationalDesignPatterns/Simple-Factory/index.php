<?php

spl_autoload_register(function($class){
    $class = str_replace('SimpleFactory\\', '', $class);
    require_once $class . '.php';
});


$sms = \SimpleFactory\NotifierFactory::getNotifier('SMS', '07111111111');
echo $sms->sendNotification();
echo '<br>';
$email = \SimpleFactory\NotifierFactory::getNotifier('Email', 'test@emailtest.bg');
echo $email->sendNotification();