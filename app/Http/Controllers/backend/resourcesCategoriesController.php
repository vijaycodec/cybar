<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;


class resourcesCategoriesController extends Controller
{
    protected $categoryRepository;

    // Inject the repository in the constructor
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    //  List all categories
    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.category.index', compact('categories'));
    }

    // Show create form
    public function create()
    {
        return view('backend.category.create');
    }

    // Store new category
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'category_type' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:4096'
            ]);

            $this->categoryRepository->create($validated, $request);

            return redirect()->route('resources-category.list')->with('success', 'Category added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()])->withInput();
        }
    }

    //  Show category details
    public function show($id)
    {
        $category = $this->categoryRepository->findById($id);

        return response()->json([
            'name' => $category->name,
            'category_type' => $category->category_type,
            'title' => $category->title,
            'created_at' => $category->created_at->format('d M, Y')
        ]);
    }

    //  Show edit form
    public function edit($id)
    {
        $category = $this->categoryRepository->findById($id);
        return view('backend.category.edit', compact('category'));
    }

    //  Update category
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'category_type' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:4096'
            ]);

            $this->categoryRepository->update($id, $validated, $request);

            return response()->json(['message' => 'Category updated successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    //  Delete category
    public function destroy($id)
    {
        try {
            $this->categoryRepository->delete($id);
    
            return response()->json([
                'message' => 'Category deleted successfully!',
                'redirect' => route('resources-category.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
    
}
