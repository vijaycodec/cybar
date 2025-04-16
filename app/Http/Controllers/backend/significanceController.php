<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use App\Models\SignificanceCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class significanceController extends Controller
{
    
    public function index()
    {
        $subcategories = SignificanceCategory::all(); // Fetch all categories
        return view('backend.significance.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    // public function create()
    // {
    //     'page_categories' => PageDetail::all(),
    //     return view('backend.significance.create');
    // }

    public function create()
{
    $pageCategories = PageDetail::all();
    return view('backend.significance.create', [
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

        SignificanceCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'page_category_id' =>$request->page_category_id,
            'category_id' =>$request->category_id,
            'sub_category_id' =>$request->sub_category_id,
        ]);

        return redirect()->route('significance.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $l3Category = SignificanceCategory::findOrFail($id);
        $page_categories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $l3Category->page_category_id)->get();
        $subCategories =SubCategory::where('category_id', $l3Category->category_id)->get();
        return view('backend.significance.edit',  compact('l3Category', 'page_categories', 'categories', 'subCategories'));
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

        $subcategory = SignificanceCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'page_category_id' =>$request->page_category_id,
            'category_id' =>$request->category_id,
            'sub_category_id' =>$request->sub_category_id,
        ]);

        return redirect()->route('significance.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = SignificanceCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('significance.list')->with('success', 'Subcategory deleted successfully.');
    }
}

