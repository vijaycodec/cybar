<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseFeatureCategory;
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
        return view('backend.coursefeature.create');
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

        CourseFeatureCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('coursefeature.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = CourseFeatureCategory::findOrFail($id);
        return view('backend.coursefeature.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = CourseFeatureCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
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
