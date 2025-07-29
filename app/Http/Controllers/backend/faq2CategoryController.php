<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Faq2Category;
use App\Models\PageDetail;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class faq2CategoryController extends Controller
{
   protected $uploadService;

    public function index()
    {
        $subcategories = Faq2Category::all();
        return view('backend.faq2.index', compact('subcategories'));
    }

    public function create()
    {
        $pageCategories = PageDetail::all();
        return view('backend.faq2.create', [
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
        ]);

        try {
            $data = $request->only([
                'name',
                'slug',
                'page_category_id',
                'category_id',
                'sub_category_id'
            ]);

            Faq2Category::create($data);

            return redirect()->route('faq2.list')->with('success', 'Category created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $l3Category = Faq2Category::findOrFail($id);
        $page_categories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $l3Category->page_category_id)->get();
        $subCategories = SubCategory::where('category_id', $l3Category->category_id)->get();

        return view('backend.faq2.edit', compact(
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
        ]);

        $subcategory = Faq2Category::findOrFail($id);

        $data = $request->only([
            'name',
            'slug',
            'page_category_id',
            'category_id',
            'sub_category_id'
        ]);

        $subcategory->update($data);

        return redirect()->route('faq2.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = Faq2Category::findOrFail($id);
        // Delete the existing image from storage

        $subcategory->delete();

        return redirect()->route('faq2.list')->with('success', 'Subcategory deleted successfully.');
    }
}
