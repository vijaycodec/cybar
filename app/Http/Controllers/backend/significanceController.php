<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SignificanceCategory;
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
    public function create()
    {
        return view('backend.significance.create');
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

        SignificanceCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('significance.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = SignificanceCategory::findOrFail($id);
        return view('backend.significance.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = SignificanceCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
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

