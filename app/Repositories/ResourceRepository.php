<?php

namespace App\Repositories;

use App\Models\Resource;
use App\Models\Category;
use App\Repositories\Interfaces\ResourceRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;



class ResourceRepository implements ResourceRepositoryInterface
{
    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAllResources()
    {
        return Resource::with('category')->orderBy('id', 'ASC')->get();
    }

    public function getResourceById($id)
    {
        return Resource::findOrFail($id);
    }

    public function createResource(array $data, $request)
    {
        $resource = new Resource();
        $resource->category_id = $data['category_id'];
        $resource->slug = $data['slug'];
        $resource->short_desc = $data['short_desc'];
        $resource->description = $data['description'];

        // Handle image upload
        if ($request->hasFile('image')) {
            // $category->images = $this->uploadImage($request, 'categories');
            $resource->images = $this->uploadService->uploadImage($request, 'resources');
        }

        $resource->save();
        return $resource;
    }

    public function updateResource($id, array $data, $request)
    {
        $resource = Resource::findOrFail($id);
        $resource->category_id = $data['category_id'];
        $resource->short_desc = $data['short_desc'];
        $resource->slug = $data['slug'];
        $resource->description = $data['description'];

        // Handle image update
       
        if ($request->hasFile('image')) {
            if ($resource->images) {
                $this->uploadService->deleteImage($resource->images, 'resources');
            }
            $resource->images =  $this->uploadService->uploadImage($request, 'resources');

        }

        $resource->save();
        return $resource;
    }

    public function deleteResource($id)
    {
        $resource = Resource::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($resource->images) {
            $this->uploadService->deleteImage($resource->images,'resources' );
        }
    
        $resource->delete();
        return true;
    }

    public function getCategoriesByType($type)
    {
        return Category::where('category_type', $type)->get();
    }
}
