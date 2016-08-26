<?php
namespace Hexavel\Passport;

use Laravel\Passport\Console;
use Laravel\Passport\PassportServiceProvider as BaseServiceProvider;

class PassportServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'passport');
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
            $this->publishes([
                __DIR__.'/../resources/views' => base_path('support/resources/views/vendor/passport'),
            ], 'passport-views');
            $this->publishes([
                __DIR__.'/../resources/assets/js/components' => base_path('support/resources/assets/js/components/passport'),
            ], 'passport-components');
            $this->commands([
                Console\InstallCommand::class,
                Console\ClientCommand::class,
                Console\KeysCommand::class,
            ]);
        }
    }
}