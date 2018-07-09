<?php

namespace JenryOllivierre\CoreuiStaticAdminTheme;

use JenryOllivierre\CoreuiStaticAdminTheme\Helper;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load the views
        $this->loadViewsFrom(
            __DIR__.'/views',
            'coreui-static'
        );

        // Publish the views
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/coreui-static'),
        ], 'lcsat-views');

        // Publish config file
        $this->publishes([
            __DIR__.'/config.php' => config_path('coreui-static.php'),
        ], 'lcsat-config');

        // Publish assets
        $this->publishes([
            __DIR__.'/public' => Helper::getAssetsPath(),
        ], 'lcsat-public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
