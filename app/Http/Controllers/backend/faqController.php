<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\FaqCategory;
use App\Models\PageDetail;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index()
    {
        $subcategories = FaqCategory::orderBy('id', 'desc')->get(); 
        
        return view('backend.faq.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        $pageCategories = PageDetail::all();
        return view('backend.faq.create', [
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

        FaqCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'page_category_id' =>$request->page_category_id,
            'category_id' =>$request->category_id,
            'sub_category_id' =>$request->sub_category_id,
        ]);

        return redirect()->route('faq.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $l3Category = FaqCategory::findOrFail($id);
        $page_categories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $l3Category->page_category_id)->get();
        $subCategories =SubCategory::where('category_id', $l3Category->category_id)->get();
        return view('backend.faq.edit',  compact('l3Category', 'page_categories', 'categories', 'subCategories'));
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

        $subcategory = FaqCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'page_category_id' =>$request->page_category_id,
            'category_id' =>$request->category_id,
            'sub_category_id' =>$request->sub_category_id,
        ]);

        return redirect()->route('faq.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = FaqCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('faq.list')->with('success', 'Subcategory deleted successfully.');
    }
}
