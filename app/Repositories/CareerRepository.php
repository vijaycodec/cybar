<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CareerRepositoryInterface;
use App\Models\Career;
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

    // public function create(array $data)
    // {
    //     return Career::create($data);
    // }

    public function create(array $data, $request)
    {
        $career = new Career();
        $career->category_id = $data['category_id'];
        $career->subcategory = $data['subcategory'];
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

    public function update($id, array $data)
    {
        $career = Career::findOrFail($id);
        $career->update($data);
        return $career;
    }

    public function delete($id)
    {
        return Career::destroy($id);
    }
}
