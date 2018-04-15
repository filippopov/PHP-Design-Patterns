<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 15.4.2018 г.
 * Time: 9:42
 */

namespace SpecificationDesignPattern;


class EmployeeIsEngineer implements EmployeeSpecification
{
    public function isSatisfiedBy(StdClass $customer): bool
    {
        if ($customer->department === 'Engineering') {
            return true;
        }

        return false;
    }
}