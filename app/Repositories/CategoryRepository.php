<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;

use Illuminate\Support\Facades\Storage;

class CategoryRepository implements CategoryRepositoryInterface
{

    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAll()
    {
        return Category::orderBy('id', 'ASC')->get();
    }

    public function findById($id)
    {
        return Category::findOrFail($id);
    }

    public function create(array $data, $request)
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->category_type = $data['category_type'];
        $category->title = $data['title'];

        // Upload and store image securely
        if ($request->hasFile('image')) {
            // $category->images = $this->uploadImage($request, 'categories');
            $category->images = $this->uploadService->uploadImage($request, 'categories');
        }

        $category->save();
        return $category;
    }

    public function update($id, array $data, $request)
    {
        $category = Category::findOrFail($id);
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->category_type = $data['category_type'];
        $category->title = $data['title'];

        // Handle image update
        if ($request->hasFile('image')) {
            if ($category->images) {
                $this->uploadService->deleteImage($category->images, 'categories');
            }
            $category->images =  $this->uploadService->uploadImage($request, 'categories');

        }

        $category->save();
        return $category;
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($category->images) {
            $this->uploadService->deleteImage($category->images,'categories' );
        }
    
        $category->delete();
        return true;
    }
}

