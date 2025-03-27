<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CyberwindCategory;
use Illuminate\Http\Request;

class cyberwimdController extends Controller
{
    public function index()
    {
        $subcategories = CyberwindCategory::orderBy('id', 'desc')->paginate(10); 
        
        return view('backend.cyberwind.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('backend.cyberwind.create');
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

        CyberwindCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('cyberwind.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = CyberwindCategory::findOrFail($id);
        return view('backend.cyberwind.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = CyberwindCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('cyberwind.list')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy($id)
    {
        $subcategory = CyberwindCategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('cyberwind.list')->with('success', 'Subcategory deleted successfully.');
    }
}
