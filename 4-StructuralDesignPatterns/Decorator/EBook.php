<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/11/2018
 * Time: 10:09 AM
 */

namespace Decorator;


class EBook implements Book
{
    private $title;
    private $author;
    private $content;

    public function __construct(string $title, string $author, string $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}