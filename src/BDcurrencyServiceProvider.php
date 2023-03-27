<?php

namespace Asif\BDcurrency;


use Asif\BDcurrency\BDcurrency;
use Illuminate\Support\ServiceProvider;

class BDcurrencyServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('bdcurrency',function($app){
			return new BDcurrency();
		});
	}

	public function boot(){
		
		

	}

}