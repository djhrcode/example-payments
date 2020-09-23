<?php

namespace App\Services\Paypal;

use App\Services\Contracts\PaymentPlatform;
use App\Services\Contracts\PaymentService;

class PaypalPlatform implements PaymentPlatform
{
    public function pay($service)
    {
        echo "make payment with paypal";
    }

    public function process()
    {
    }
}
