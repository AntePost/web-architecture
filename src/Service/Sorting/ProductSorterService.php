<?php

namespace Service\Sorting;

use Contracts\ComparatorInterface;

class ProductSorterService
{
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function sort(array $products): array
    {
        usort($products, [$this->comparator, 'compare']);

        return $products;
    }
}