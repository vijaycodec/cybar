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
        $comments = Comment::with('resource')->orderBy('id', 'DESC')->paginate(10);

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
            // Validate input using Validator::make
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:comments',
                'message' => 'required',
                'g-recaptcha-response' => 'required|captcha'  // Validate reCAPTCHA
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput(); // Return old input for user convenience
            }

            // Save the new category
            $comment = new Comment();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->resource_id = $request->resource_id;
            $comment->message = $request->message;

            $comment->save();

            return response()->json([
                'status' => 'message',
                'message' => 'Your comment has been submitted.',
            ]);

        } catch (\Exception $e) {
            // Handle any unexpected errors
            return redirect()->back()
                ->withErrors(['error' => 'Something went wrong. Please try again later.'])
                ->withInput();
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
