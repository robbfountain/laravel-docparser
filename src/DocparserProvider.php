<?php


namespace onethirtyone\docparser;


use Illuminate\Support\ServiceProvider;

class DocparserProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'docparser');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/docparser'),
        ],'docparser-views');

        $this->publishes([
            __DIR__ . '/../public/' => public_path('vendor/docparser')
        ], 'docparser-public');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallerCommand::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}