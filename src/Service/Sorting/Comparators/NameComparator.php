<?php

namespace Service\Sorting\Comparators;

use Contracts\ComparatorInterface;

class NameComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        return $a->getName() <=> $b->getName();
    }
}