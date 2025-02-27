<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll()
    {
        return Category::orderBy('id', 'ASC')->paginate(10);
    }

    public function findById($id)
    {
        return Category::findOrFail($id);
    }

    public function create(array $data, $request)
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->category_type = $data['category_type'];
        $category->title = $data['title'];

        // Upload and store image securely
        if ($request->hasFile('image')) {
            $category->images = $this->uploadImage($request, 'categories');
        }

        $category->save();
        return $category;
    }

    public function update($id, array $data, $request)
    {
        $category = Category::findOrFail($id);
        $category->name = $data['name'];
        $category->category_type = $data['category_type'];
        $category->title = $data['title'];

        // Handle image update
        if ($request->hasFile('image')) {
            if ($category->images) {
                $this->deleteImage($category->images, 'categories');
            }
            $category->images = $this->uploadImage($request, 'categories');
        }

        $category->save();
        return $category;
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);

        // Delete the existing image from storage
        if ($category->images) {
            $this->deleteImage($category->images, 'categories');
        }

        $category->delete();
        return true;
    }

    // Secure image upload function
    private function uploadImage($request, $folder)
    {
        if ($request->hasFile('image')) {
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

            // Validate file name 
            $originalName = preg_replace('/[^a-zA-Z0-9._-]/', '', $image->getClientOriginalName());
            if (preg_match('/\.(php|exe|sh|bat|phtml|jsp|asp|aspx|cgi|pl)$/i', $originalName)) {
                throw new \Exception('Disallowed file type');
            }

            // Limit file name length 
            if (strlen($originalName) > 255) {
                throw new \Exception('File name too long');
            }

            // Generate unique filename 
            $file_name = md5(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Store file securely in `storage/app/public/uploads/backend/categories/`
            $path = $image->storeAs("uploads/backend/{$folder}", $file_name, 'public');

            return $file_name;
        }
        return null;
    }

    // Secure image deletion function
    private function deleteImage($fileName, $folder)
    {
        $filePath = "uploads/backend/{$folder}/{$fileName}";

        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    }
}

