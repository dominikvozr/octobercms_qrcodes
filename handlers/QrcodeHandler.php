<?php namespace Dondo\Qrcodes\Handlers;

use Backend\Facades\BackendAuth;
use Dondo\Qrcodes\Facades\QrcodeManager;
use Illuminate\Support\Facades\Storage;
use RainLab\User\Facades\Auth;
use Response;

class QrcodeHandler {
	public function getQrcode($id) {
		//if ( ! Auth::check() ) return response(content: 'forbidden', status: 403);

		$qrcode = QrcodeManager::getQrcodeById($id);

		$image = Storage::get(storage_path($qrcode->path));
		//return response()->json($image);

		return response()->make($image, 200, ['content-type' => 'image/jpg']);
	}

	public function serveSvg($id)
	{
		if ( ! BackendAuth::check() ) return response(content: 'forbidden', status: 403);

		$qrcode = QrcodeManager::getQrcodeById($id);

		$image = QrcodeManager::serveQrcode($qrcode->path);
		//return response()->json($image);

		return response()->download(storage_path().'/app'.$qrcode->path);
	}

	public function qrcodeDownload($id)
	{
		if (!BackendAuth::check()) return response(content: 'forbidden', status: 403);

		$qrcode = QrcodeManager::getQrcodeById($id);

		return Response::download(url('storage/app'.$qrcode->path));
	}
}