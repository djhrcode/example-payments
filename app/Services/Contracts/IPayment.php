<?php

namespace App\Services\Contracts;

interface IPayment {
    public function __construct(object $data, IOrder $order);
    public function getData(): object;
    public function getOrder(): IOrder;
    public function getStatus(): string;
    public function hasSucceeded(): bool;
    public function hasFailed(): bool;
}
