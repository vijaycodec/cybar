<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class commentController extends Controller
{

    public function index()
    {
        $comments = Comment::with('resource')->orderBy('id', 'DESC')->get();

        $resource_names = [];
        foreach ($comments as $comment) {
            $id = $comment->resource->category_id;
            $category = Category::findOrFail($id);
            $resource_names[] = $category->name;  // Add resource name to the array
        }

        return view('backend.comment.index', compact('comments', 'resource_names'));
    }

    public function store(Request $request)
    {
        try {
            // Debugging: Log incoming request
    
            // Validate input
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|min:3|max:100',
                'email' => 'required|email|max:255',
                'message' => 'required|min:5|max:500',
                'resource_id' => 'required|integer',
                // 'g-recaptcha-response' => 'required|captcha'  // Uncomment if using reCAPTCHA
    
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }
    
            // Save the comment
            $comment = new Comment();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->resource_id = $request->resource_id;
            $comment->message = $request->message;
            $comment->save();
    
            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    
    public function show($id)
    {
        $permission = Comment::findOrFail($id);

        return response()->json([
            'name' => $permission->name,
            'title' => $permission->title,
            'created_at' => $permission->created_at->format('d M, Y')
        ]);
    }

    public function edit($id)
    {

        $category = Comment::findOrFail($id);

        return view('backend.category.edit', compact('category'));
    }

    public function destroy($id)
    {
        $categories = Comment::find($id);
        if ($categories) {
            $categories->delete();
            return response()->json([
                'success' => 'Category deleted successfully!',
                'redirect' => route('resources-category.list') // Include the redirect URL
            ], 200);
        }
    }
}
