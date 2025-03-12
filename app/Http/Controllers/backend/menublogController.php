<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\MenuBlogRepositoryInterface;
// use Intervention\Image\Laravel\Facades\Image;

class menublogController extends Controller
{
    protected $menuBlogRepository;

    public function __construct(MenuBlogRepositoryInterface $menuBlogRepository)
    {
        $this->menuBlogRepository = $menuBlogRepository;
    }
    public function index()
    {
        $blogs = $this->menuBlogRepository->getAllBlogs();

        return view('backend.menublog.index', compact('blogs'));
    }

    public function getShortDescription($description)
    {
        // Remove HTML tags and split the description into words
        $words = explode(' ', strip_tags($description));

        // If there are more than 20 words, truncate and add "..."
        if (count($words) > 19) {

            return implode(' ', array_slice($words, 0, 19)) . '...';
        }

        return implode(' ', $words);  // Return as is if less than or equal to 20 words
    }

    public function create()
    {
        // Retrieve blog categories via the repository instead of querying the model directly.
        $categories = $this->menuBlogRepository->getCategoriesByType('blog');
        return view('backend.menublog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category' => 'required',
            'slug' => 'required',
            'short_desc'   => 'required',
            'description'  => 'required',
        ]);

        try {
            $this->menuBlogRepository->createBlog($validated, $request);

            return redirect()->route('menublog.list')
                             ->with('success', 'Record has been added successfully !');
        } catch (\Exception $e) {
            return redirect()->back()
                             ->with('error', 'An error occurred while adding the blog: ' . $e->getMessage());
        }
    }
   

    public function edit($id)
{
    // Retrieve categories for blogs via the category repository.
    $all_categories = $this->menuBlogRepository->getCategoriesByType('blog');

    // Retrieve the specific blog via the menu blog repository.
    $blogs = $this->menuBlogRepository->getBlogById($id);

    // Pass the retrieved data to the view.
    return view('backend.menublog.edit', compact('blogs', 'all_categories'));
}

    // Update Menu Blog

    public function update(Request $request, $id)
    {
       
        try {
            $validated = $request->validate([
            'category_id' => 'required',
            'sub_category' => 'required',
            'slug' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
           
        ]);
        $this->menuBlogRepository->updateBlog($id, $validated, $request);

        return redirect()->route('menublog.list')->with('message', 'Blog updated successfully!');
    } catch (\Exception $e) {
        return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
    }
    }


    public function destroy($id)
    {
        try {
            $this->menuBlogRepository->deleteBlog($id);
    
            return response()->json([
                'message' => 'blog deleted successfully!',
                'redirect' => route('resources-category.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }


}