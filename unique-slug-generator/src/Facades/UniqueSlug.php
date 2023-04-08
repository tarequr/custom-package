<?php

namespace Sabbir\UniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sabbir\UniqueSlug\UniqueSlug;
 */
Class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'unique-slug';
    }
}
