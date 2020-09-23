<?php


namespace App\Services;

use App\Services\MyCommerce\MyCommercePlatform;
use App\Services\Paypal\PaypalPlatform;

abstract class AvailablePlatforms
{
    const MyCommerce = "my-commerce";
    const Paypal = "paypal";

    /**
     * Returns an instance of MyCommercePlatform
     *
     * @return MyCommercePlatform
     */
    final static function getMyCommerceInstance(): MyCommercePlatform
    {
        return new MyCommercePlatform();
    }

    /**
     * Returns an instance of PaypalPlatform
     *
     * @return PaypalPlatform
     */
    final static function getPaypalInstance(): PaypalPlatform
    {
        return new PaypalPlatform();
    }
}
