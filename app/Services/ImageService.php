<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\UploadServiceInterface;


class ImageService implements UploadServiceInterface
{
    /**
     * Upload an image securely.
     *
     * @param Request $request
     * @param string  $folder
     * @return string|null
     * @throws \Exception
     */
    public function uploadImage(Request $request, string $folder): ?string
    {
        if ($request->hasFile('image')) {
            // Validate file
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg,webp|max:4096',
            ]);

            $image = $request->file('image');

            // Validate MIME type
            $mimeType = mime_content_type($image->getPathname());
            $allowedTypes = ['image/png', 'image/jpeg', 'image/webp'];
            if (!in_array($mimeType, $allowedTypes, true)) {
                throw new \Exception('Invalid file type detected');
            }

            // Prevent directory traversal
            $folder = basename($folder);

            // Sanitize original file name
            $originalName = preg_replace('/[^a-zA-Z0-9._-]/', '', $image->getClientOriginalName());
            if (preg_match('/\.(php|exe|sh|bat|phtml|jsp|asp|aspx|cgi|pl)$/i', $originalName)) {
                throw new \Exception('Disallowed file type');
            }

            // Limit file name length
            if (strlen($originalName) > 255) {
                throw new \Exception('File name too long');
            }

            // Generate a unique file name
            $fileName = md5(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Store the file in storage/app/public/uploads/backend/{folder}/
            $image->storeAs("uploads/backend/{$folder}", $fileName, 'public');

            return $fileName;
        }

        return null;
    }

    /**
     * Delete an image from storage.
     *
     * @param string $folder
     * @param string $fileName
     * @return bool
     */
    public function deleteImage(string $fileName, string $folder): bool
    {
        // Prevent directory traversal

        $filePath = "uploads/backend/{$folder}/{$fileName}";

        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->delete($filePath);
        }

        return false;
    }
}
