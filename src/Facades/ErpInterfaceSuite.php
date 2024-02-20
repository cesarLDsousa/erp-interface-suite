<?php

namespace CesarLDsousa\ErpInterfaceSuite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CesarLDsousa\ErpInterfaceSuite\ErpInterfaceSuite
 */
class ErpInterfaceSuite extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CesarLDsousa\ErpInterfaceSuite\ErpInterfaceSuite::class;
    }
}
