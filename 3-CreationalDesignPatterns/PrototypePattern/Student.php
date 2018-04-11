<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 4/11/2018
 * Time: 9:17 AM
 */

namespace PrototypePattern;


class Student
{
    public $name;
    public $year;
    public $grade;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function setGrade(string $grade)
    {
        $this->grade = $grade;
    }
}