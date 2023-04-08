<?php

namespace Sabbir\UniqueSlug;

use Illuminate\Support\ServiceProvider;

Class UniqueSlugServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('unique-slug', function($app) {
            return new \Sabbir\UniqueSlug\UniqueSlug();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
