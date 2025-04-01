<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuBlog;

class blogViewController extends Controller
{
    public function view($category_slug, $slug)
    {
        // Fetch the blog post along with its category
        $resource = MenuBlog::with('category')
            ->where('slug', $slug)
            ->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            })
            ->first();

        // Fetch category name

        // If blog not found, return 404
        if (!$resource) {
            abort(404, 'Blog not found');
        }

        $category_slug = $resource->category->name ?? null;

        // Fetch subcategory name (if relation exists)
        $slug = $resource->sub_category ?? null;
        // Fetch trending blogs
        $trendings = MenuBlog::with('category')->latest()->take(5)->get();

        return view('frontend.blog-view', [
            'resource' => $resource,
            'trendings' => $trendings,
            'category_slug' => $category_slug,
            'slug' => $slug
        ]);
    }

    public function trendingResourceView($id = null)
    {

        $resource = MenuBlog::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type', 'blog')->latest()->take(5)->get();

        // Fetch the category
        $category = Category::findOrFail($id);

        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.blog-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
        } else {
            return view('frontend.blog-view', ['trendings' => $trendings, 'category' => $category]);
        }
    }
}
