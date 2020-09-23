<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * @var PaymentService
     */
    private $service;

    public function __construct(PaymentService $service)
    {
        $this->service = $service;
    }

    public function pay(){
        $this->service->pay();
        return 'Payment done';
    }
}
