<?php

namespace Cdo9\LaravelSassMixins;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cdo9\LaravelSassMixins\Skeleton\SkeletonClass
 */
class LaravelSassMixinsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-sass-mixins';
    }
}
