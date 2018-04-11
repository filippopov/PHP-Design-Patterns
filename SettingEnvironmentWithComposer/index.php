<?php

require_once 'vendor\autoload.php';

$test = new \IcyApril\ChapterOne\Test\TestBook();
$test->test = 'opa';
new \IcyApril\ChapterOne\Book($test);