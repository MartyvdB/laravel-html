<?php

namespace Martyb\Html\Facades;

use Martyb\Html\Html as HtmlBuilder;
use Spatie\Html\Html as BaseFacade;

class Html extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @see \Martyb\Html\Html
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return HtmlBuilder::class;
    }
}
