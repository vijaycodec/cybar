<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\MenuBlog;
use App\Repositories\Interfaces\MenuBlogRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MenuBlogRepository implements MenuBlogRepositoryInterface
{

    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }
    
    public function getAllBlogs()
    {
        return MenuBlog::with('category')->orderBy('id', 'ASC')->paginate(10);
    }

    public function getBlogById($id): MenuBlog
    {
        return MenuBlog::with('category')->findOrFail($id);
    }

    public function getCategoriesByType(string $type)
    {
        return Category::where('category_type', $type)->get();
    }

    public function createBlog(array $data, Request $request): MenuBlog
    {
        $blog = new MenuBlog();
        $blog->category_id = $data['category_id'];
        $blog->sub_category = $data['sub_category'];
        $blog->short_desc = $data['short_desc'];
        $blog->description = $data['description'];

        if ($request->hasFile('image')) {
            // $category->images = $this->uploadImage($request, 'categories');
            $blog->images = $this->uploadService->uploadImage($request, 'blog');
        }

        $blog->save();
        return $blog;
    }

    public function updateBlog($id, array $data, Request $request): MenuBlog
    {
        $blog = MenuBlog::findOrFail($id);
        $blog->category_id = $data['category_id'];
        $blog->sub_category = $data['sub_category'];
        $blog->short_desc = $data['short_desc'];
        $blog->description = $data['description'];

        if ($request->hasFile('image')) {
            if ($blog->images) {
                $this->uploadService->deleteImage($blog->images, 'blog');
            }
            $blog->images =  $this->uploadService->uploadImage($request, 'blog');

        }

        $blog->save();
        return $blog;
    }

    public function deleteBlog($id): bool
    {
        $blog = MenuBlog::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($blog->images) {
            $this->uploadService->deleteImage($blog->images,'blog' );
        }
    
        $blog->delete();
        return true;
    }
}
