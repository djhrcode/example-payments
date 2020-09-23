<?php

namespace App\Services\MyCommerce;

use App\Services\Contracts\IOrder;

class MyCommerceOrder implements IOrder
{

    private $items = [];
    private $amount = 0;
    private $description = null;

    public function __construct(array $items, int $amount, $description = null)
    {
        $this->items = $items;
        $this->amount = $amount;
        $this->description = $description;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
