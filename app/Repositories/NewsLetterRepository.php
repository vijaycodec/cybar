<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\NewsLetter;
use App\Repositories\Interfaces\NewsLetterRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;
use Illuminate\Http\Request;

class NewsLetterRepository implements NewsLetterRepositoryInterface
{
    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAllNewsletters()
    {
        // return Newsletter::all();
        return NewsLetter::with('category')->orderBy('id', 'ASC')->get();
    }

    public function getNewsletterById($id)
    {
        //return Newsletter::findOrFail($id);
        return NewsLetter::with('category')->findOrFail($id);
    }

    public function getCategoriesByType(string $type)
    {
        return Category::where('category_type', $type)->get();
    }

    public function createNewsletter(array $data, Request $request)
    {
        // return Newsletter::create($data);
        $newsletter = new NewsLetter();
        $newsletter->category_id = $data['category_id'];
        $newsletter->sub_category = $data['sub_category'];
        $newsletter->slug = $data['slug'];
        $newsletter->short_desc = $data['short_desc'];
        $newsletter->description = $data['description'];

        if ($request->hasFile('image')) {
            // $category->images = $this->uploadImage($request, 'categories');
            $newsletter->images = $this->uploadService->uploadImage($request, 'newsletter');
        }

        $newsletter->save();
        return $newsletter;
    }

    public function updateNewsletter($id, array $data, Request $request)
    {
        // $newsletter = Newsletter::findOrFail($id);
        // return $newsletter->update($data);
        $newsletter = NewsLetter::findOrFail($id);
        $newsletter->category_id = $data['category_id'];
        $newsletter->sub_category = $data['sub_category'];
        $newsletter->slug = $data['slug'];
        $newsletter->short_desc = $data['short_desc'];
        $newsletter->description = $data['description'];

        if ($request->hasFile('image')) {
            if ($newsletter->images) {
                $this->uploadService->deleteImage($newsletter->images, 'newsletter');
            }
            $newsletter->images =  $this->uploadService->uploadImage($request, 'newsletter');

        }

        $newsletter->save();
        return $newsletter;
    }

    public function deleteNewsletter($id)
    {
        $newsletter = NewsLetter::findOrFail($id);
        // Delete the existing image from storage (pass folder first, then file name)
        if ($newsletter->images) {
            $this->uploadService->deleteImage($newsletter->images,'newsletter' );
        }
    
        $newsletter->delete();
        return true;
    }
}
