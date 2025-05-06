<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use App\Models\SignificanceCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UploadServiceInterface;

class SignificanceController extends Controller
{
    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $subcategories = SignificanceCategory::all();
        return view('backend.significance.index', compact('subcategories'));
    }

    public function create()
    {
        $pageCategories = PageDetail::all();
        return view('backend.significance.create', [
            'page_categories' => $pageCategories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'image' => 'nullable',
        ]);

        try {
            $data = $request->only([
                'name',
                'slug',
                'page_category_id',
                'category_id',
                'sub_category_id'
            ]);

            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadService->uploadImage($request, 'significanceCategory');
            }

            SignificanceCategory::create($data);

            return redirect()->route('significance.list')->with('success', 'Category created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $l3Category = SignificanceCategory::findOrFail($id);
        $page_categories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $l3Category->page_category_id)->get();
        $subCategories = SubCategory::where('category_id', $l3Category->category_id)->get();

        return view('backend.significance.edit', compact(
            'l3Category',
            'page_categories',
            'categories',
            'subCategories'
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'image' => 'nullable',
        ]);

        $subcategory = SignificanceCategory::findOrFail($id);

        $data = $request->only([
            'name',
            'slug',
            'page_category_id',
            'category_id',
            'sub_category_id'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadService->uploadImage($request, 'significanceCategory');
        }

        $subcategory->update($data);

        return redirect()->route('significance.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = SignificanceCategory::findOrFail($id);
        // Delete the existing image from storage

        if ($subcategory->image) {
            $this->uploadService->deleteImage($subcategory->image, 'significanceCategory');
        }

        $subcategory->delete();

        return redirect()->route('significance.list')->with('success', 'Subcategory deleted successfully.');
    }
}
