<?php

namespace App\Services\MyCommerce;

use App\Services\Contracts\IOrder;
use App\Services\Contracts\IPayment;

class MyCommercePayment implements IPayment
{
    private $data = null;
    private $order = null;

    public function __construct(object $data, IOrder $order)
    {
        $this->data = $data;
        $this->order = $order;
    }

    public function getData(): object
    {
        return (object) $this->data;
    }

    public function getStatus(): string
    {
        return $this->data->order_notification->purchase->payment_status;
    }

    public function getOrder(): IOrder
    {
        return $this->order;
    }

    public function hasFailed(): bool
    {
        return $this->getStatus() === 'failed';
    }

    public function hasSucceeded(): bool
    {
        return $this->getStatus() === 'approved';
    }
}
