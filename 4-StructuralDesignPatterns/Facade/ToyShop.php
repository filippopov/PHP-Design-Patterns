<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 14.4.2018 г.
 * Time: 11:51
 */

namespace Facade;


class ToyShop
{
    private $courier;
    /**
     * @var Manufacturer
     */
    private $manufacture;
    private $sms;

    public function __construct(string $factoryAdress, string $contactNumber, int $capacity)
    {
        $this->courier = new Post($factoryAdress);
        $this->sms = new SMS($contactNumber);
        $this->manufacture = new Manufacturer($capacity);
    }

    public function processOrder(string $address, $phone)
    {
        $item = $this->manufacture->build();
        $this->courier->dispatch($item, $address);
        $this->sms->send($phone, 'Your order has been shipped');
    }
}