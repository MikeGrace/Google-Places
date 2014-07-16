<?php namespace Mikegrace\Googleplaces\Facades;

use Illuminate\Support\Facades\Facade;

class Googleplaces extends Facade {
	protected static function getFacadeAccessor() {
		return 'googleplaces';
	}
}