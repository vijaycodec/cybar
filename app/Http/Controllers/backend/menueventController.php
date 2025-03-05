<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MenuEvent;
use App\Repositories\Interfaces\MenuEventRepositoryInterface;


class menueventController extends Controller
{

    protected $menuEventRepository;

    public function __construct(MenuEventRepositoryInterface $menuEventRepository)
    {
        $this->menuEventRepository = $menuEventRepository;
    }

   public function index()
   {
       $events = $this->menuEventRepository->getAllEvents();

       return view('backend.menuevent.index', compact('events'));
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
        // Retrieve all categories from the Category model
        $categories = Category::where('category_type', 'event')->get();
       
        // Return the 'create' view with the categories data passed as a variable
        return view('backend.menuevent.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           
            'category_id' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'video_url' => 'nullable',

        ]);

        try {
            $this->menuEventRepository->createEvent($validated, $request);

            return redirect()->route('menuevent.list')
                             ->with('success', 'Record has been added successfully !');
        } catch (\Exception $e) {
            return redirect()->back()
                             ->with('error', 'An error occurred while adding the event: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        // Retrieve categories for event via the category repository.
        $all_categories = $this->menuEventRepository->getCategoriesByType('event');

        // Retrieve the specific blog via the menu blog repository.
        $events = $this->menuEventRepository->getEventById($id);

        // Pass the retrieved data to the view.
        return view('backend.menuevent.edit', compact('events', 'all_categories'));
    }

    // Update Menu Blog

    public function update(Request $request, $id)
    {
       
        try {
            $validated = $request->validate([
               
            'category_id' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'video_url' => 'nullable',
            'image' => 'nullable'
           
        ]);
        $this->menuEventRepository->updateEvent($id, $validated, $request);

        return redirect()->route('menuevent.list')->with('message', 'Events updated successfully!');
    } catch (\Exception $e) {
        return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
    }
    }

    //Delete event

    public function destroy($id)
    {
        try {
            $this->menuEventRepository->deleteEvent($id);
    
            return response()->json([
                'message' => 'Event deleted successfully!',
                'redirect' => route('menuevent.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

}
