<?php

namespace Asif\PassGenerator;


use Asif\PassGenerator\PassGenerator;
use Illuminate\Support\ServiceProvider;

class PassGeneratorServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('bdcurrency',function($app){
			return new PassGenerator();
		});
	}

	public function boot(){
		
		

	}

}