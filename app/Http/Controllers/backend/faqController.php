<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
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
        return view('backend.faq.create');
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

        FaqCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('faq.list')->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $subcategory = FaqCategory::findOrFail($id);
        return view('backend.faq.edit', compact('subcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $subcategory = FaqCategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
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
