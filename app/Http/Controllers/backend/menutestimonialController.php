<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use App\Models\Category;

class menutestimonialController extends Controller
{
    protected $testimonialRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }

    public function index()
    {
        $testimonials = $this->testimonialRepository->getAll();
        return view('backend.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        // Retrieve all categories from the Category model
        $categories = Category::where('category_type', 'testimonials')->get();
        return view('backend.testimonial.create' , compact('categories'));
 
   }

   public function store(Request $request)
   {
       try {
           $validated = $request->validate([
               'user_name' => 'required',
               'category_id' => 'required',
               'designation' => 'required',
               'short_desc' => 'required',
               'description' => 'required',
               'image' => 'nullable'
           ]);

           $this->testimonialRepository->create($validated, $request);

           return redirect()->route('menutestimonial.list')->with('success', 'Testimonial added successfully!');
       } catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()])->withInput();
       }
   } 

   public function edit($id)
    {
        // Retrieve categories for blogs via the category repository.
        $categories = $this->testimonialRepository->getCategoriesByType('testimonials');

        // Retrieve the specific blog via the menu blog repository.
        $testimonials = $this->testimonialRepository->getById($id);

        // Pass the retrieved data to the view.
        return view('backend.testimonial.edit', compact('testimonials', 'categories'));
    }


    public function update(Request $request, $id)
    {
       
        try {
            $validated = $request->validate([
                'user_name' => 'required',
                'category_id' => 'required',
                'designation' => 'required',
                'short_desc' => 'required',
                'description' => 'required',           
        ]);
        $this->testimonialRepository->update($id, $validated, $request);

        return redirect()->route('menutestimonial.list')->with('message', 'Testimonials updated successfully!');
    } catch (\Exception $e) {
        return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
    }
    }


    public function destroy($id)
    {
        try {
            $this->testimonialRepository->delete($id);
    
            return response()->json([
                'message' => 'testimonial deleted successfully!',
                'redirect' => route('menutestimonial.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }


}
