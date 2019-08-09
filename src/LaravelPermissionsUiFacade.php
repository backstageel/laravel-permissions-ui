<?php

namespace Backstageel\LaravelPermissionsUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Backstageel\LaravelPermissionsUi\Skeleton\SkeletonClass
 */
class LaravelPermissionsUiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-permissions-ui';
    }
}
