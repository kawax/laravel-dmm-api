<?php

namespace Revolution\Dmm\Facades;

use Illuminate\Support\Facades\Facade;

use Revolution\Dmm\DmmClient;

class Dmm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DmmClient::class;
    }
}
