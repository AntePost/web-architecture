<?php

namespace Service\Sorting\Comparators;

use Contracts\ComparatorInterface;

class PriceComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        return $a->getPrice() <=> $b->getPrice();
    }
}