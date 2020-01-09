<?php

namespace Filipac\Cnp\Laravel;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Filipac\Cnp\Cnp;

class CnpValidatorProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('cnp', function ($attribute, $value, $parameters) {
            return Cnp::valid($value);
        });
        Validator::replacer('cnp', function ($message, $attribute, $rule, $parameters) {
            $message = "Cnp-ul introdus nu este corect!";
            return $message;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      //
    }
}
