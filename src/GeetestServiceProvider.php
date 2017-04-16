<?php
namespace LaravelChen\Geetest;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class GeetestServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__ . '/../views', 'geetest');

		$this->publishes([
			__DIR__ . '/../views' => base_path('resources/views/vendor/geetest'),
			__DIR__ . '/config.php' => config_path('geetest.php'),
		]);

		Route::get('laravelchen/geetest', 'LaravelChen\Geetest\GeetestController@getGeetest');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('geetest', function () {
			return $this->app->make('LaravelChen\Geetest\GeetestLib');
		});
	}
}
