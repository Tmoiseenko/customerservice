<?php

namespace Tmoiseenko\CustomerService\Facades;

use Illuminate\Support\Facades\Facade;

class CustomerService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'customerservice';
    }
}
