<?php namespace DaveJamesMiller\Aliases;

use Illuminate\Support\ServiceProvider;

class AliasesServiceProvider extends ServiceProvider {

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('command.aliases');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('command.aliases', 'DaveJamesMiller\Aliases\AliasesCommand');

		$this->commands('command.aliases');
	}

}
