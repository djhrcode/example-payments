<?php

namespace App\Services\Contracts;

interface PaymentPlatform {

    public function process(IPayment $payment);

    public function pay(IOrder $order);

}
