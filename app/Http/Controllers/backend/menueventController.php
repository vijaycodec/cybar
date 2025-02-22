<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MenuEvent;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class menueventController extends Controller
{
   // Display a listing of the events
   public function index()
   {
       $events = MenuEvent::with('category')->orderBy('id', 'ASC')->paginate(10);
       return view('backend.menuevent.index', compact('events'));
   }

//     public function getShortDescription($description)
//     {
//         // Remove HTML tags and split the description into words
//         $words = explode(' ', strip_tags($description));

//         // If there are more than 20 words, truncate and add "..."
//         if (count($words) > 19) {

//             return implode(' ', array_slice($words, 0, 19)) . '...';
//         }

//         return implode(' ', $words);  // Return as is if less than or equal to 20 words
//     }


    public function create()
    {
        // Retrieve all categories from the Category model
        $categories = Category::where('category_type', 'event')->get();
       
        // Return the 'create' view with the categories data passed as a variable
        return view('backend.menuevent.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Using Validator::make to validate the request data

        $validator = Validator::make($request->all(), [
            
            'category_id' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $events = new MenuEvent();
            $events->category_id = $request->category_id;
            $events->short_desc = $request->short_desc;
            $events->description = $request->description;

            
            if ($request->hasFile('image')) {
                // Validate the image
                $request->validate([
                    'image' => 'mimes:png,jpg,jpeg|max:2048'
                ]);
    
    
                // Handle the image upload if a new image is selected
                $image = $request->file('image');
                $file_extension = $image->extension();
                $file_name = Carbon::now()->timestamp . '.' . $file_extension;
    
                // Save the new image
                $image->move(public_path('uploads/backend/events'), $file_name);
    
                // Store the new image path in the database
                $events->images = $file_name;
            } 
                $events->save();
                return redirect()->route('menuevent.list')->with('success', 'Record has been added successfully !');
            
        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the events: ' . $e->getMessage());
        }
    }

}
