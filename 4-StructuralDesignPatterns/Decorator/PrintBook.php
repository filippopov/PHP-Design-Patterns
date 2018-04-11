<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/11/2018
 * Time: 10:12 AM
 */

namespace Decorator;


class PrintBook implements Book
{
    private $eBook;

    public function __construct(string $title, string $author, string $content)
    {
        $this->eBook = new EBook($title, $author, $content);
    }

    public function getTitle(): string
    {
        return $this->eBook->getTitle();
    }

    public function getAuthor(): string
    {
        return $this->eBook->getAuthor();
    }

    public function getContent(): string
    {
        return $this->eBook->getTitle();
    }

    public function getText(): string
    {
        $contents = $this->eBook->getTitle() . " by " . $this->eBook->getAuthor();
        $contents .= "\n";
        $contents .= $this->eBook->getContent();
        return $contents;
    }
}