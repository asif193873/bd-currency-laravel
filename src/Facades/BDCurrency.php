<?php
namespace Asif\PassGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class BDCurrency extends Facade {

	protected static function getFacadeAccessor()
    {
        return 'bdcurrency';
    }
}

