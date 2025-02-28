<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface UploadServiceInterface
{
    /**
     * Upload an image securely.
     *
     * @param Request $request
     * @param string  $folder
     * @return string|null
     */
    public function uploadImage(Request $request, string $folder): ?string;

    /**
     * Delete an image from storage.
     *
     * @param string $folder
     * @param string $fileName
     * @return bool
     */
    public function deleteImage(string $folder, string $fileName): bool;
}
