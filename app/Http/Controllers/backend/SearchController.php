<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $query = $request->input('query');

        // Fetch results from the database
        $results = Category::with('resources')->where('category_type', 'resources')->where('name', 'LIKE', "%{$query}%")
            ->get();
        // If no results found, run a fallback search
        if ($results->isEmpty()) {
            
            $results  = Resource::where('sub_category', 'Like', "%{$query}%")->get();
        }


        // $categories = Category::with('resources')->where('category_type','resources')->get();


        return response()->json($results);
    }
}
