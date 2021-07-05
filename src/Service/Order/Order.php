<?php

declare(strict_types=1);

namespace Service\Order;

use Contracts\OrderBuilderInterface;

class Order
{
    private $products;
    private $billing;
    private $discount;
    private $security;
    private $communication;

    public function __construct(OrderBuilderInterface $builder)
    {
        $this->products = $builder->getProducts();
        $this->billing = $builder->getBilling();
        $this->discount = $builder->getDiscount();
        $this->security = $builder->getSecurity();
        $this->communication = $builder->getCommunication();
    }

    public function checkoutProcess(): void {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }

        $discount = $this->discount->getDiscount();
        $totalPrice = $totalPrice - $totalPrice / 100 * $discount;

        $this->billing->pay($totalPrice);

        $user = $this->security->getUser();
        $this->communication->process($user, 'checkout_template');
    }
}