<?php namespace CMS\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'CMS\Repositories\AccountRepositoryInterface', 
			'CMS\Repositories\Eloquent\AccountRepository'
		);
		
		$this->app->bind(
			'CMS\Repositories\PlayerRepositoryInterface', 
			'CMS\Repositories\Eloquent\PlayerRepository'
		);
	}
}