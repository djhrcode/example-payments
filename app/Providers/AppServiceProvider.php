<?php

namespace App\Providers;

use App\Services\MyCommerceService;
use App\Services\PaymentService;
use App\Services\PaypalService;
use Exception;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentService::class, function ($app) {
            $request = request();

            if (!$request->has('method')):
                throw new Exception('There is no method defined');
            endif;

            $method = $request->method;

            return new PaymentService($method);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
