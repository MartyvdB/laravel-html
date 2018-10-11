<?php

namespace Martyb\Html;

use Spatie\Html\HtmlServiceProvider as ServiceProvider;

class HtmlServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Html::class);
    }
}
