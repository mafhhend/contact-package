<?php

namespace Samkhdev\Contact;

use Illuminate\Support\ServiceProvider;
use Rny\SlugUtf8\SlugUtf8;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');

        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('SamanGogoli.php'),
        ], "config");

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ], 'views');
    }
    public function register()
    {
    }
}
