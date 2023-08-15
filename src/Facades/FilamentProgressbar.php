<?php

namespace Njxqlus\FilamentProgressbar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Njxqlus\FilamentProgressbar\FilamentProgressbar
 */
class FilamentProgressbar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Njxqlus\FilamentProgressbar\FilamentProgressbar::class;
    }
}
