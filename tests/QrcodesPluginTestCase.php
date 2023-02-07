<?php namespace RainLab\User\Tests;

use App;
use PluginTestCase;
use Illuminate\Foundation\AliasLoader;
use RainLab\User\Models\Settings;

/**
 * UserPluginTestCase
 */
abstract class QrcodesPluginTestCase extends PluginTestCase
{
    /**
     * setUp test case
     */
    public function setUp(): void
    {
        parent::setUp();

        // Reset any modified settings
        Settings::resetDefault();

        // Log out after each test
        \RainLab\User\Classes\AuthManager::instance()->logout();

        // Register the auth facade
        $alias = AliasLoader::getInstance();
        $alias->alias('QrcodeManager', \Dondo\Qrcodes\Facades\QrcodeManager::class);

        App::singleton('qrcode_management', function () {
            return \Dondo\Qrcodes\Classes\QrcodeManagement::instance();
        });
    }
}
