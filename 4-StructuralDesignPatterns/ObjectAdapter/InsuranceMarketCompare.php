<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 11:38
 */

namespace ObjectAdapter;


class InsuranceMarketCompare implements MarketCompare
{
    private $insurance;

    public function __construct(float $limit, float $excess)
    {
        $this->insurance = new Insurance($limit, $excess);
    }

    public function getAnnualPremium()
    {
        return $this->insurance->annualPremium();
    }

    public function getMonthlyPremium()
    {
        return $this->insurance->monthlyPremium();
    }
}