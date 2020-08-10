<?php

namespace msztorc\Appdynamics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \msztorc\Appdynamics\Skeleton\SkeletonClass
 */
class AppdynamicsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'appdynamics';
    }
}
