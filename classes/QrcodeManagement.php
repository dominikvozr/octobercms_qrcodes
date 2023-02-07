<?php namespace Dondo\Qrcodes\Classes;

use \SimpleSoftwareIO\QrCode\Facades\QrCode;
use Dondo\Qrcodes\Models\QRcode as QRcodeModel;
use Storage;

class QrcodeManagement {
	protected static $instance;

	public function getQrcodeById($id)
	{
		return QRcodeModel::find($id);
	}

	public function createQrcode($name = null) {
		$qrcode = new QRcodeModel();
		$qrcode->path = '/qrcodes/qrcd' . time() . '.svg';
		$qrcode->name = $name;
		$qrcode->save();
		QrCode::generate(env('FE_APP_URL', '127.0.0.1') . '/login?qrcode_id='. $qrcode->id, storage_path('app') . $qrcode->path);
		return $qrcode->id;
	}

	public function deleteQrcode($id)
	{
		$qrcode = QRcodeModel::find($id);
		QRcodeModel::destroy($id);
		Storage::delete($qrcode->path);
		return "success";
	}

	public function serveQrcode($path)
	{
		return Storage::get($path);
	}

	public function downloadQrcode($path)
	{
		return Storage::download($path);
	}
}