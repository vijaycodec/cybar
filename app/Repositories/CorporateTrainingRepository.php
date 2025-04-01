<?php

namespace App\Repositories;

use App\Models\CorporateTraining;
use App\Models\CourseCategory;
use App\Models\SubCategory;
use App\Repositories\Interfaces\CorporateTrainingRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;


class CorporateTrainingRepository implements CorporateTrainingRepositoryInterface
{
    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAll()
    {
        return CorporateTraining::with('course_category', 'subcategory')
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function getById($id)
    {
        return CorporateTraining::findOrFail($id);
    }

    public function getCategoriesByPageId($pageId)
    {
        return CourseCategory::where('page_category', $pageId)->get();
    }

    public function getSubCategoriesByCategoryId($categoryId)
    {
        return SubCategory::where('category_id', $categoryId)->get();
    }

    public function create(array $data, $request)
    {
 
        $corporateTraining = new CorporateTraining();
        $corporateTraining->category_id = $data['category_id'];
        $corporateTraining->sub_category_id = $data['sub_category_id'];
        $corporateTraining->description = $data['description'];

         // Upload and store image securely
         if ($request->hasFile('image')) {
            $corporateTraining->images = $this->uploadService->uploadImage($request, 'trainings');
        }

        $corporateTraining->save();
        return $corporateTraining;
    }

    public function getCorporateTrainingWithCategories($id)
    {
        $corporateTraining = CorporateTraining::findOrFail($id);
        $categories = CourseCategory::where('page_category',2)->get();
        $subCategories = SubCategory::where('category_id', $corporateTraining->category_id)->get();

        return compact('corporateTraining', 'categories', 'subCategories');
    }
    public function update($id, array $data, $request)
    {
        $corporateTraining = CorporateTraining::findOrFail($id);
        $corporateTraining->category_id = $data['category_id'];
        $corporateTraining->sub_category_id = $data['sub_category_id'];
        $corporateTraining->description = $data['description'];

          // Handle image update
          if ($request->hasFile('image')) {
            if ($corporateTraining->images) {
                $this->uploadService->deleteImage($corporateTraining->images,'trainings');
            }
            $corporateTraining->images = $this->uploadService->uploadImage($request, 'trainings');
        }

        $corporateTraining->save();
        return $corporateTraining;
    }

    public function delete($id)
    {
        $corporateTraining = CorporateTraining::findOrFail($id);
        if ($corporateTraining) {
            $corporateTraining->delete();
            return true;
        }
        return false;
    }
}
