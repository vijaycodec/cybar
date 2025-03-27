<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class blogsubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = BlogCategory::orderBy('id', 'desc')->paginate(10); 
        
        return view('backend.blog.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        BlogCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('blog.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = BlogCategory::findOrFail($id);
        return view('backend.blog.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = BlogCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('blog.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = BlogCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('blog.list')->with('success', 'Subcategory deleted successfully.');
    }
}
