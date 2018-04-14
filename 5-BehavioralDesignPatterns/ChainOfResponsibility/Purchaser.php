<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 17:30
 */

namespace ChainOfResponsibility;


interface Purchaser
{
    public function setNextPurchaser(Purchaser $purchaser): bool;

    public function buy($price): bool;
}