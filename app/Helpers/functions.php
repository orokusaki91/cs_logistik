<?php 

function uploadImage($file, $path) {
	$fileName = null;
	if ($file) {
		$fileName = $file->hashName();
		$image = \Image::make($file)->resize(1920, null, function ($constraint) {
			$constraint->aspectRatio();
		});
		$image = (string)$image->encode('jpg', 75);
		Storage::put($path . '/'. $fileName, $image);
	}
	return $fileName;
}