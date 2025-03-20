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
        $results = Category::where('name', 'LIKE', "%{$query}%")->get();

        return response()->json($results);
    }
}
