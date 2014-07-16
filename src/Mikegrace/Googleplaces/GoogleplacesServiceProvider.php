<?php namespace Mikegrace\Googleplaces;

use Illuminate\Support\ServiceProvider;

class GoogleplacesServiceProvider extends ServiceProvider {

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
		$this->package('mikegrace/googleplaces');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['googleplaces'] = $this->app->share(function($app) {
			return new Googleplaces;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Googleplaces', 'Mikegrace\Googleplaces\Facades\Googleplaces');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('googleplaces');
	}

}
