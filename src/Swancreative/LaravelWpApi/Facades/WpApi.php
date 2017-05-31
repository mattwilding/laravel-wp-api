<?php namespace Swancreative\LaravelWpApi\Facades;

use Illuminate\Support\Facades\Facade;
use Swancreative\LaravelWpApi\WpApi as WordpressApi;

class WpApi extends Facade {

    protected static function getFacadeAccessor() { return WordpressApi::class; }

}
