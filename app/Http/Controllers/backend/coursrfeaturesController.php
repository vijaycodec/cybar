<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseFeatureCategory;
use App\Models\PageDetail;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class coursrfeaturesController extends Controller
{
    public function index()
    {
        $subcategories = CourseFeatureCategory::orderBy('id', 'desc')->get(); 
        
        return view('backend.coursefeature.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        $pageCategories = PageDetail::all();
        return view('backend.coursefeature.create', [
            'page_categories' => $pageCategories
        ]);
        
    }

    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
        ]);

        CourseFeatureCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'page_category_id' =>$request->page_category_id,
            'category_id' =>$request->category_id,
            'sub_category_id' =>$request->sub_category_id,
        ]);

        return redirect()->route('coursefeature.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $l3Category = CourseFeatureCategory::findOrFail($id);
         // Fetch related data for dropdowns
         $page_categories = PageDetail::all();
         $categories = CourseCategory::where('page_category', $l3Category->page_category_id)->get();
         $subCategories =SubCategory::where('category_id', $l3Category->category_id)->get();
 
        return view('backend.coursefeature.edit', compact('l3Category', 'page_categories', 'categories', 'subCategories'));
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

        $subcategory = CourseFeatureCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'page_category_id' =>$request->page_category_id,
            'category_id' =>$request->category_id,
            'sub_category_id' =>$request->sub_category_id,
        ]);

        return redirect()->route('coursefeature.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = CourseFeatureCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('coursefeature.list')->with('success', 'Subcategory deleted successfully.');
    }
}
