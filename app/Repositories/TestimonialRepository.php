<?php
namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use App\Models\MenuTestimonial;
use App\Repositories\Interfaces\UploadServiceInterface;

class TestimonialRepository implements TestimonialRepositoryInterface
{

    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAll()
    {
        return MenuTestimonial::orderBy('id', 'ASC')->get();
    }

    public function getById($id)
    {
        return MenuTestimonial::with('category')->findOrFail($id);
    }

    // public function getBlogById($id): MenuTestimonial
    // {
    //     return MenuTestimonial::with('category')->findOrFail($id);
    // }

    public function getCategoriesByType(string $type)
    {
        return Category::where('category_type', $type)->get();
    }

    public function create(array $data, $request)
    {
        $testimonial = new MenuTestimonial();
        $testimonial->category_id = $data['category_id'];
        $testimonial->user_name = $data['user_name'];
        $testimonial->designation = $data['designation'];
        $testimonial->testimonial_description = $data['description'];
        $testimonial->testimonial_short_description = $data['short_desc'];
        // Upload and store image securely
        if ($request->hasFile('image')) {
            $testimonial->images = $this->uploadService->uploadImage($request, 'testimonial');
        }

        $testimonial->save();
        return $testimonial;
    }

    public function update($id, array $data, $request)
    {
        $testimonial = MenuTestimonial::findOrFail($id);
        $testimonial->category_id = $data['category_id'];
        $testimonial->user_name = $data['user_name'];
        $testimonial->designation = $data['designation'];
        $testimonial->testimonial_description = $data['description']; 
        $testimonial->testimonial_short_description = $data['short_desc'];

        // Handle image update
        if ($request->hasFile('image')) {
            if ($testimonial->images) {
                $this->uploadService->deleteImage($testimonial->images,'testimonial');
            }
            $testimonial->images = $this->uploadService->uploadImage($request, 'testimonial');
        }

        $testimonial->save();
        return $testimonial;
    }

    public function delete($id)
    {
        $testimonial = MenuTestimonial::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($testimonial->images) {
            $this->uploadService->deleteImage($testimonial->images,'testimonial');
        }
    
        $testimonial->delete();
        return true;
    }


    //Frontend methods for testimonials 

    public function getAllCategories()
    {
        return Category::with('testimonials')->where('category_type', 'testimonials')->get();
    }

    public function getTrendingCategories()
    {
        return Category::where('category_type', 'testimonials')->latest()->take(10)->get();
    }
}
