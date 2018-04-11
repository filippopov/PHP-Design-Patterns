<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/11/2018
 * Time: 10:06 AM
 */

namespace Decorator;


interface Book
{
    public function __construct(string $title, string $author, string $content);

    public function getTitle(): string;

    public function getAuthor(): string;

    public function getContent(): string;
}