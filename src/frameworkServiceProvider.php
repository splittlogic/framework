<?php

namespace splittlogic\framework;

use Illuminate\Support\ServiceProvider;

class frameworkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

      $this->loadViewsFrom(__DIR__.'/../resources/views', 'framework');
  		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
      /*
       * Optional methods to load your package assets
       */
       // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

  		if ($this->app->runningInConsole()) {
  			$this->bootForConsole();
  		}

    }

    /**
     * Register the application services.
     */
    public function register()
    {

      $this->mergeConfigFrom(__DIR__.'/../config/framework.php', 'framework');

  		$this->app->singleton('framework', function ($app) {
  			return new framework;
  		});

    }

    public function provides()
  	{

  		return ['framework'];

  	}

    protected function bootForConsole()
  	{

  		// Publishing the configuration file.
  		$this->publishes([
  			__DIR__.'/../config/framework.php' => config_path('framework.php'),
  		], 'framework.config');

  		// Publishing the views.
      $this->publishes([
          __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
      ], 'framework.views');

      // Publishing assets.
      $this->publishes([
          __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
      ], 'public');

  	}
}
