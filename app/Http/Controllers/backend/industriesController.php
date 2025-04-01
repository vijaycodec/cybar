<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\IndustryCategory;
use Illuminate\Http\Request;

class industriesController extends Controller
{
    public function index()
    {
        $subcategories = IndustryCategory::orderBy('id', 'desc')->get(); 
        
        return view('backend.industry.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('backend.industry.create');
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

        IndustryCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('industry.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = IndustryCategory::findOrFail($id);
        return view('backend.industry.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = IndustryCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('industry.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = IndustryCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('industry.list')->with('success', 'Subcategory deleted successfully.');
    }
}
