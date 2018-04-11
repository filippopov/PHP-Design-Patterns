<?php
require_once 'vendor/autoload.php';

// composer require vlucas/phpdotenv

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

var_dump($_ENV); die();
