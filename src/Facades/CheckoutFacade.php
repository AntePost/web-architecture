<?php

namespace Facades;

use Service\Order\Basket;

class CheckoutFacade
{
    private $basket;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    public function checkout()
    {
        $this->basket->checkout();
    }
}