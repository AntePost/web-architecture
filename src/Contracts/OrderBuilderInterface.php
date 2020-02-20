<?php

declare(strict_types=1);

namespace Contracts;

use Service\Billing\BillingInterface;
use Service\Discount\DiscountInterface;
use Service\User\SecurityInterface;
use Service\Communication\CommunicationInterface;
use Service\Order\Order;

interface OrderBuilderInterface
{
    public function getProducts(): array;

    public function getBilling(): ?BillingInterface;

    public function getDiscount(): ?DiscountInterface;

    public function getSecurity(): ?SecurityInterface;
    
    public function getCommunication(): ?CommunicationInterface;

    public function setProducts(array $products): self;

    public function setBilling(BillingInterface $billing): self;

    public function setDiscount(DiscountInterface $discount): self;

    public function setSecurity(SecurityInterface $security): self;
    
    public function setCommunication(CommunicationInterface $communication): self;

    public function build(): Order;
}