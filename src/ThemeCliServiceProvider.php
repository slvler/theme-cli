<?php

namespace Slvler\ThemeCli;

use App;
use Illuminate\Support\ServiceProvider;
use Slvler\ThemeCli\Contracts\ThemeCliContract;
use Slvler\ThemeCli\Managers\ThemeCli;

class ThemeCliServiceProvider extends ServiceProvider
{
    public function boot()
    {}

    public function register()
    {
        $this->publishConfig();
        $this->themeConfig();
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/themecli.php' => config_path('themecli.php'),
        ], 'themecli');
    }

    public function themeConfig()
    {
        $this->app->singleton(ThemeCliContract::class, function ($app) {
            $theme = new ThemeCli($app, $this->app['view']->getFinder(), $this->app['config'], $this->app['translator']);
            return $theme;
        });


    }

}
