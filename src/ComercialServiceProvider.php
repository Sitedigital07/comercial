<?php

namespace Digitalsite\Comercial;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class ComercialServiceProvider extends ServiceProvider
{
	

	public function boot(){
	 include __DIR__ . '/Http/routes.php';
      
     $this->loadViewsFrom(__DIR__ . '/../views', 'comercial');
    }

	public function register(){
	 
	 $this->app['comercial'] = $this->app->share(function ($app){
	 	return new Comercial;
	 });
}

}