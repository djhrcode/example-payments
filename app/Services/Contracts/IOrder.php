<?php

namespace App\Services\Contracts;

interface IOrder {
    public function __construct(array $items, int $amount, $description = null);
    public function getItems(): array;
    public function getAmount(): int;
    public function getDescription(): ?string;
}
