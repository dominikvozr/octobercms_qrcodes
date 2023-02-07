<?php namespace Dondo\Qrcodes;

use Route;
use Dondo\Qrcodes\Handlers\QrcodeHandler;

Route::group(['middleware' => 'RainLab\User\Classes\AuthMiddleware'], function () {
	Route::get('qrcode/{id}', [QrcodeHandler::class, 'getQrcode']);
});

Route::get('serve/qrcode/{id}', [QrcodeHandler::class, 'serveSvg']);
//Route::get('qrcode/download/{id}', [QrcodeHandler::class, 'qrcodeDownload']);