<?php namespace JShrink;

use Illuminate\Support\ServiceProvider;

class JShrinkServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app['JShrink'] = $this->app->share(function ($app)
		{
			return new Minifier();
		});
	}
}
