<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/9/2018
 * Time: 4:31 PM
 */

namespace IcyApril\ChapterOne;


use IcyApril\ChapterOne\Test\TestBook;

class Book
{
    public function __construct(TestBook $test)
    {
        echo 'Hello World ' . $test->test;
    }
}