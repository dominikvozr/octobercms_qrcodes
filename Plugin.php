<?php namespace Dondo\Qrcodes;

use Dondo\Qrcodes\Models\QRcode;
//use \Ramsey\Uuid\Uuid;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        //\Config::set('sanctum', \Config::get('dondo.auth::sanctum'));
        /* $this->app[\Illuminate\Contracts\Http\Kernel::class]
            ->prependMiddleware(SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class); */
    }

    public function register()
    {
        \App::registerClassAlias('QrCode', \SimpleSoftwareIO\QrCode\Facades\QrCode::class);
        \App::register(\SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class);
        \App::registerClassAlias('QrcodeManager', \Dondo\Qrcodes\Facades\QrcodeManager::class);
        \App::register(\Dondo\Qrcodes\Providers\QrcodeServiceProvider::class);

    }
}
