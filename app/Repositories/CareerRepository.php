<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CareerRepositoryInterface;
use App\Models\Career;
use App\Models\Category;
use App\Repositories\Interfaces\UploadServiceInterface;

class CareerRepository implements CareerRepositoryInterface
{
    
    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAll()
    {
        return Career::orderBy('id', 'DESC')->paginate(10);
    }

    public function getById($id)
    {
        return Career::findOrFail($id);
    }

    public function getCategoriesByType(string $type)
    {
        return Category::where('category_type', $type)->get();
    }

    public function create(array $data, $request)
    {
        $career = new Career();
        $career->category_id = $data['category_id'];
        $career->subcategory = $data['subcategory'];
        $career->slug = $data['slug'];
        $career->location = $data['location'];
        $career->educational_background = $data['educational_background'];
        $career->description = $data['description'];
        $career->short_desc = $data['short_desc'];
        // Upload and store image securely
        if ($request->hasFile('image')) {
            $career->images = $this->uploadService->uploadImage($request, 'career');
        }
       
        $career->save();
        return $career;
    }

    public function update($id, array $data, $request) 
    {
        $career = Career::findOrFail($id);
        $career->category_id = $data['category_id'];
        $career->subcategory = $data['subcategory'];
        $career->slug = $data['slug'];
        $career->location = $data['location'];
        $career->educational_background = $data['educational_background'];
        $career->description = $data['description'];
        $career->short_desc = $data['short_desc'];
        // Upload and store image securely
        if ($request->hasFile('image')) {
            $career->images = $this->uploadService->uploadImage($request, 'career');
        }
       
        $career->save();
        return $career;
    }


    public function delete($id): bool
    {
        $career = Career::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($career->images) {
            $this->uploadService->deleteImage($career->images,'career' );
        }
    
        $career->delete();
        return true;
    }
}
