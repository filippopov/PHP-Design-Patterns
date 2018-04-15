<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 18:17
 */

namespace SpecificationDesignPattern;


interface EmployeeSpecification
{
    public function isSatisfiedBy(StdClass $customer): bool;
}