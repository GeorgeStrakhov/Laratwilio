<?php namespace Twilio\Laratwilio;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Config;
use Config;

class LaratwilioServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('twilio/laratwilio');
        $this->app['laratwilio'] = $this->app->share(function($app)
        {
            //getting the config and making it available
            return new Laratwilio(Config::get('laratwilio::laratwilio'));
        });
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}