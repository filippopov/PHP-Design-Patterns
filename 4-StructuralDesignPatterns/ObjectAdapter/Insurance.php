<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 11:29
 */

namespace ObjectAdapter;


class Insurance
{
    private $limit;
    private $excess;

    public function __construct(float $limit, float $excess)
    {
        if ($limit <= $excess) {
            throw new \Exception('Excess must be less than premium.');
        }

        $this->limit = $limit;
        $this->excess = $excess;
    }

    public function monthlyPremium(): float
    {
        return ($this->limit - $this->excess) / 200;
    }

    public function annualPremium(): float
    {
        return $this->monthlyPremium() * 11.5;
    }
}