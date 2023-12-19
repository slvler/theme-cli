<?php

namespace Slvler\ThemeCli\Facades;

use Illuminate\Support\Facades\Facade;

class ThemeCli extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Slvler\ThemeCli\Contracts\ThemeCliContract::class;
    }
}
