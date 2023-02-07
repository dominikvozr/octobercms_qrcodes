<?php namespace Dondo\Qrcodes\Providers;

use Dondo\Qrcodes\Classes\QrcodeManagement;
use Illuminate\Support\ServiceProvider;

class QrcodeServiceProvider extends ServiceProvider {
	public function register()
	{
		$this->app->singleton('qrcode_management', fn ($app) => new QrcodeManagement());
	}
}