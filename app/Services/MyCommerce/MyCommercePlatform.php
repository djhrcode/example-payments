<?php

namespace App\Services\MyCommerce;

use App\Services\Contracts\PaymentPlatform;
use App\Services\MyCommerce\MyCommerceOrder;

class MyCommercePlatform implements PaymentPlatform
{
    public function pay(MyCommerceOrder $order)
    {

    }

    public function process(MyCommercePayment $payment)
    {

    }
}
