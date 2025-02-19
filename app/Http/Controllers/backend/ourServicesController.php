<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\OurServices;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class ourServicesController extends Controller
{
    public function index()
    {
        // Retrieve services with their related category, ordered by ID, and paginated

       $services = OurServices::with('course_category')->orderBy('id', 'ASC')->paginate(10);

        // Return the 'index' view with services data
        return view('backend.our-services.index', compact('services'));
    }


    public function create($pageId)
    {
        // Retrieve all categories from the Category model
        $categories = CourseCategory::where('page_category', $pageId)->get();

        // Return the 'create' view with the categories data passed as a variable
        return view('backend.our-services.create', compact('categories'));
    } 

        // Fetch Categories based on Page Category ID
        public function getSubCategories(Request $request)
        {
     
            $categories = SubCategory::where('category_id', $request->category_id)->get();
         
            return response()->json($categories);
        }

    public function store(Request $request)
    {
        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'description' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $services = new OurServices();
            $services->category_id = $request->category_id;
            $services->sub_category_id = $request->sub_category_id;
            $services->description = $request->description;

            
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
                $image->move(public_path('uploads/backend/services'), $file_name);
    
                // Store the new image path in the database
                $services->images = $file_name;
            } 
                $services->save();
                return redirect()->route('our-services.list')->with('success', 'Record has been added successfully !');
            
        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the resource: ' . $e->getMessage());
        }
    }

}
