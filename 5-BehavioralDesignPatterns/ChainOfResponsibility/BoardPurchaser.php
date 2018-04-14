<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 17:44
 */

namespace ChainOfResponsibility;


class BoardPurchaser implements Purchaser
{
    /**
     * @var Purchaser
     */
    private $nextPurchaser;

    public function setNextPurchaser(Purchaser $purchaser): bool
    {
        $this->nextPurchaser = $purchaser;
        return true;
    }

    public function buy($price): bool
    {
        if ($price < 100000) {
            var_dump('Board purchased');
            return true;
        } else {
            if (isset($this->nextPurchaser)) {
                return $this->nextPurchaser->buy($price);
            } else {
                var_dump('could not buy');
                return false;
            }
        }
    }
}