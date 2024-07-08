<?php

namespace App\Traits;

use App\Exceptions\ImageNotFoundException;
use App\Http\Controllers\Panel\UserController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;

trait UploadImage
{
    private function generateImageName(string $type): string
    {
        return Carbon::now()->microsecond . '.' . $type;
    }

    private function generateImagePath(string $configKey): string
    {
        return Config::get('panelconfig.image_path' . $configKey);
    }

    private function imageExists(string $imagePath): bool
    {
        return File::exists($imagePath);
    }

    /**
     * @throws ImageNotFoundException
     */
    private function deleteImage(string $imagePath): bool
    {
        if (!$this->imageExists($imagePath)) throw new ImageNotFoundException();
        return File::delete($imagePath);
    }

    private function moveImage(UploadedFile $image, string $imagePath, string $imageName)
    {
        $image->move(public_path($imagePath), $imageName);
    }

    protected function uploadImage(UploadedFile $imageKeyRequest, string $configKey)
    {
        $imageName = $this->generateImageName($imageKeyRequest->extension());
        $imagePath = $this->generateImagePath($configKey);
        $this->moveImage($imageKeyRequest, $imagePath, $imageName);
        return $imagePath . $imageName;
    }

    protected function updateImage(UploadedFile $imageKeyRequest, string $configKey,$imagePath)
    {
        if (!is_null($imagePath)) {
            if ($this->imageExists($imagePath))
                $this->deleteImage($imagePath);
        }

        return $this->uploadImage($imageKeyRequest, $configKey);
    }

}
