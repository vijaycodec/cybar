<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ServicesRepositoryInterface;
use App\Models\OurServices;
use App\Repositories\Interfaces\UploadServiceInterface;

class ServicesRepository implements ServicesRepositoryInterface
{

    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAll()
    {
        return OurServices::orderBy('id', 'ASC')->paginate(10);
    }

    public function getById($id)
    {
        return OurServices::findOrFail($id);
    }

    public function create(array $data, $request)
    {
        $service = new OurServices();
        $service->category_id = $data['category_id'];
        $service->sub_category_id = $data['sub_category_id'];
        $service->description = $data['description'];
        // Upload and store image securely
        if ($request->hasFile('image')) {
            $service->images = $this->uploadService->uploadImage($request, 'services');
        }

        $service->save();
        return $service;
    }

    public function update($id, array $data, $request)
    {
        $service = OurServices::findOrFail($id);
        $service->category_id = $data['category_id'];
        $service->sub_category_id = $data['sub_category_id'];
        $service->description = $data['description'];

        // Handle image update
        if ($request->hasFile('image')) {
            if ($service->images) {
                $this->uploadService->uploadService->deleteImage($service->images,'services' );
            }
            $service->images = $this->uploadService->uploadImage($request, 'services');
        }

        $service->save();
        return $service;
    }


    public function delete($id)
    {
        $category = OurServices::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($category->images) {
            $this->uploadService->deleteImage($category->images,'services');
        }
    
        $category->delete();
        return true;
    }
}
