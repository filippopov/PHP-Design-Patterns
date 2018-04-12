<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 11:35
 */

namespace ObjectAdapter;


interface MarketCompare
{
    public function __construct(float $limit, float $excess);

    public function getAnnualPremium();

    public function getMonthlyPremium();
}