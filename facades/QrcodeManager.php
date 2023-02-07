<?php namespace Dondo\Qrcodes\Facades;

use Illuminate\Support\Facades\Facade;

class QrcodeManager extends Facade {
	protected static function getFacadeAccessor() { return 'qrcode_management'; }
}