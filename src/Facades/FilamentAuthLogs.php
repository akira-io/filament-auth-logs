<?php

namespace Akira\FilamentAuthLogs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akira\FilamentAuthLogs\FilamentAuthLogs
 */
class FilamentAuthLogs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Akira\FilamentAuthLogs\FilamentAuthLogs::class;
    }
}
