<?php

namespace Icatala\Logger;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Icatala\Logger\Skeleton\SkeletonClass
 */
class LoggerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'logger';
    }
}
