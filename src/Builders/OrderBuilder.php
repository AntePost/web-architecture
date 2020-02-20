<?php

declare(strict_types=1);

namespace Builders;

use Contracts\OrderBuilderInterface;
use Service\Billing\BillingInterface;
use Service\Discount\DiscountInterface;
use Service\User\SecurityInterface;
use Service\Communication\CommunicationInterface;
use Service\Order\Order;

class OrderBuilder implements OrderBuilderInterface
{
    private $products;
    private $billing;
    private $discount;
    private $security;
    private $communication;

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getBilling(): ?BillingInterface
    {
        return $this->billing;
    }

    public function getDiscount(): ?DiscountInterface
    {
        return $this->discount;
    }

    public function getSecurity(): ?SecurityInterface
    {
        return $this->security;
    }

    public function getCommunication(): ?CommunicationInterface
    {
        return $this->communication;
    }

    public function setProducts(array $products): OrderBuilderInterface
    {
        $this->products = $products;
        return $this;
    }

    public function setBilling(BillingInterface $billing): OrderBuilderInterface
    {
        $this->billing = $billing;
        return $this;
    }

    public function setDiscount(DiscountInterface $discount): OrderBuilderInterface
    {
        $this->discount = $discount;
        return $this;
    }

    public function setSecurity(SecurityInterface $security): OrderBuilderInterface
    {
        $this->security = $security;
        return $this;
    }

    public function setCommunication(CommunicationInterface $communication): OrderBuilderInterface
    {
        $this->communication = $communication;
        return $this;
    }

    public function build(): Order
    {
        return new Order($this);
    }
}