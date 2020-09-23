<?php

namespace App\Services;

use Exception;
use App\Services\AvailablePlatforms;
use App\Services\Contracts\PaymentPlatform;
use App\Service as ServiceModel;

class PaymentService
{
    /**
     * @var string
     */
    private $platformName = null;

    /**
     * @var PaymentPlatform
     */
    private $platform = null;

    public function __construct($platformName = "paypal")
    {
        $this->platformName = $platformName;
        $this->platform = $this->getPlatformInstance();
    }

    private function getPlatformInstance(): PaymentPlatform
    {
        switch ($this->platformName) {
            case AvailablePlatforms::MyCommerce:
                return AvailablePlatforms::getMyCommerceInstance();
                break;

            case AvailablePlatforms::Paypal:
                return AvailablePlatforms::getPaypalInstance();
                break;
        }

        throw new Exception("Method Not Found: {$this->platformName}");
    }

    public function getPlatformName(): string
    {
        return $this->platformName;
    }

    public function initializePayment(ServiceModel $service)
    {
    }

    public function processPayment(PaymentModel $service)
    {
    }
}
