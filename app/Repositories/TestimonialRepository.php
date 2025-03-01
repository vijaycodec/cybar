<?php
namespace App\Repositories;
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
        return MenuTestimonial::orderBy('id', 'ASC')->paginate(10);
    }

    public function getById($id)
    {
        return MenuTestimonial::findOrFail($id);
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
}
