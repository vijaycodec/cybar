<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class courseCategoryController extends Controller
{
    public function index()
    {
        $categories = CourseCategory::with('pageCategory')
            ->orderBy('id', 'ASC')
            ->get();
        //dd($categories);
        return view('backend.courseCategory.index', compact('categories'));
    }

    public function create()
    {
        $categories = PageDetail::all();
        // dd($categories);
        return view('backend.courseCategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => [
                'required',
                Rule::unique('course_categories', 'name')->where(
                    fn($query) =>
                    $query->where('page_category', $request->category_id)
                ),
            ],
            'title' => 'required',
            'slug'  => 'required',
        ], [
            'name.unique' => 'Category already exists for this page.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            CourseCategory::create([
                'page_category' => $request->category_id,
                'category_group' => $request->category_group,
                'name'          => $request->name,
                'slug'          => $request->slug,
                'title'         => $request->title,
            ]);

            return redirect()->route('course-category.list')->with('success', 'Category added successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage())->withInput();
        }
    }


    public function show($id)
    {
        $category = CourseCategory::findOrFail($id);

        return response()->json([
            'page_category' => $category->pages_category,
            'name' => $category->name,
            'created_at' => $category->created_at->format('d M, Y')
        ]);
    }

    // Show form for editing a category
    public function edit($id)
    {
        $courseCategory = CourseCategory::findOrFail($id);
        $categories = PageDetail::all(); // Fetch all page categories
        return view('backend.courseCategory.edit', compact('courseCategory', 'categories'));
    }

   public function update(Request $request, $id)
{
    // Validate input
    $validator = Validator::make($request->all(), [
        'category_id' => 'required',
        'name' => [
            'required',
            Rule::unique('course_categories', 'name')
                ->where(fn($query) => $query->where('page_category', $request->category_id))
                ->ignore($id), // Ignore current record
        ],
        'title' => 'required',
        'slug'  => 'required',
    ], [
        'name.unique' => 'Category already exists for this page.',
    ]);

    // Return with errors if validation fails
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    try {
        // Find and update the category
        $courseCategory = CourseCategory::findOrFail($id);

        $courseCategory->page_category = $request->category_id;
        $courseCategory->name          = $request->name;
        $courseCategory->slug          = $request->slug;
        $courseCategory->title         = $request->title;

        $courseCategory->save();

        return redirect()->route('course-category.list')->with('success', 'Category updated successfully!');
    } catch (\Exception $e) {
        return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage())->withInput();
    }
}

    public function destroy($id)
    {
        $categories = CourseCategory::find($id);
        if ($categories) {
            $categories->delete();
            return response()->json([
                'message' => 'Category deleted successfully!',
                'redirect' => route('course-category.list') // Include the redirect URL
            ], 200);
        } else {
            return response()->json([
                'message' => 'No Category Found! ',
                'redirect' => route('course-category.list') // Include the redirect URL
            ], 404);
        }
    }
}
