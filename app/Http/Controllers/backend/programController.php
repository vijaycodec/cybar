<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;

class programController extends Controller
{
    public function index()
    {
        $subcategories = ProgramCategory::all(); // Fetch all categories
        
        return view('backend.program.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('backend.program.create');
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

        ProgramCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('program.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = ProgramCategory::findOrFail($id);
        return view('backend.program.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = ProgramCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('program.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = ProgramCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('program.list')->with('success', 'Subcategory deleted successfully.');
    }
}
