<?php

declare(strict_types=1);

namespace Directors;

use Service\Billing\Transfer\Card;
use Service\Discount\NullObject;
use Service\User\Security;
use Service\Communication\Sender\Email;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class OrderDirector
{
    private $products;
    private $session;

    public function __construct(array $products, SessionInterface $session)
    {
        $this->products = $products;
        $this->session = $session;
    }

    public function constructNewOrder(OrderBuilderInterface $builder): void
    {
        $builder->setProducts($this->products)
            ->setBilling(new Card())
            ->setDiscount(new NullObject())
            ->setSecurity(new Security($this->session))
            ->setCommunication(new Email());
    }
}