<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class subcategoryController extends Controller
{
    public function index()
    {
        // Use eager loading to fetch related data to minimize queries
        $subCategories = SubCategory::with(['pageCategory', 'category'])
            ->orderBy('id', 'ASC')
            ->get(); // Paginate results for better performance

        return view('backend.sub_category.index', compact('subCategories'));
    }

    public function create()
    {
        $page_categories = PageDetail::all();

        return view('backend.sub_category.create', compact('page_categories'));
    }

    // Fetch Categories based on Page Category ID
    public function getCategories(Request $request)
    {
        $categories = CourseCategory::where('page_category', $request->page_category_id)->get();
        return response()->json($categories);
    }

    // Fetch Sub-Categories based on Category ID
    // public function getSubCategories(Request $request)
    // {
    // //dd($request->all());
    //     $subCategories = SubCategory::where('category_id', $request->category_id)->get();
    //     // dd($subCategories);
    //     return response()->json($subCategories);
    // }

    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category' => [
                'required',
                Rule::unique('sub_categories', 'sub_category')->where(function ($query) use ($request) {
                    return $query->where('page_category_id', $request->page_category_id)
                        ->where('category_id', $request->category_id);
                }),
            ],
            'slug' => 'required',
        ], [
            'sub_category.unique' => 'This sub-category already exists for the selected page and category.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            SubCategory::create([
                'page_category_id' => $request->page_category_id,
                'category_id'      => $request->category_id,
                'sub_category'     => $request->sub_category,
                'slug'             => $request->slug,
            ]);

            return redirect()->route('sub-category.list')->with('success', 'Record has been added successfully!');
        } catch (\Exception $e) {
            // Log error if needed: \Log::error($e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'An error occurred while adding the record. Please try again later.'])
                ->withInput();
        }
    }

    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        //dd($subCategory->category_id);
        $pageCategories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $subCategory->page_category_id)->get();

        return view('backend.sub_category.edit', compact('subCategory', 'pageCategories', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category' => [
                'required',
                Rule::unique('sub_categories', 'sub_category')
                    ->where(function ($query) use ($request) {
                        return $query->where('page_category_id', $request->page_category_id)
                            ->where('category_id', $request->category_id);
                    })
                    ->ignore($id), // Ignore current subcategory ID
            ],
            'slug' => 'required',
        ], [
            'sub_category.unique' => 'This sub-category already exists for the selected page and category.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $subCategory = SubCategory::findOrFail($id);

            $subCategory->page_category_id = $request->page_category_id;
            $subCategory->category_id      = $request->category_id;
            $subCategory->sub_category     = $request->sub_category;
            $subCategory->slug             = $request->slug;

            $subCategory->save();

            return redirect()->route('sub-category.list')->with('success', 'Record has been updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'An error occurred while updating the record. Please try again later.'])
                ->withInput();
        }
    }
    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        if ($subCategory) {
            $subCategory->delete();
            return response()->json([
                'message' => 'Sub Category deleted successfully!',
                'redirect' => route('sub-category.list') // Include the redirect URL
            ], 200);
        }
    }
}
