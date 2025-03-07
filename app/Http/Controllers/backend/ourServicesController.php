<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ServicesRepositoryInterface;

class OurServicesController extends Controller
{
    protected $servicesRepository;

    public function __construct(ServicesRepositoryInterface $servicesRepository)
    {
        $this->servicesRepository = $servicesRepository;
    }

    public function index()
    {
        $services = $this->servicesRepository->getAll();
        return view('backend.our-services.index', compact('services'));
    }

    public function create($pageId)
    {
        $pageId=1;
        $categories = CourseCategory::where('page_category', $pageId)->get();
        return view('backend.our-services.create', compact('categories'));
    }

    public function getSubCategories(Request $request)
    {
        $categories = SubCategory::where('category_id', $request->category_id)->get();
        return response()->json($categories);
    }

    public function store(Request $request)
{
    // Using Validator::make to validate the request data
    $validate = $request->validate([
        'category_id' => 'required',
        'sub_category_id' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
    ]);

        $this->servicesRepository->create($validate, $request);

        return redirect()->route('our-services.list')->with('success', 'Record has been added successfully!');
    
}

    public function edit($id)
    {
        $service = $this->servicesRepository->getById($id);
        $categories = CourseCategory::where('page_category',1)->get();
        
        $subCategories = SubCategory::where('category_id', $service->category_id)->get();

        return view('backend.our-services.edit', compact('service', 'categories', 'subCategories'));
    }
    
    public function update(Request $request, $id)
    {
        try {
            $validate = $request->validate([
                'category_id' => 'required',
                'sub_category_id' => 'required',
                'description' => 'required',
            ]);
        
                $this->servicesRepository->update($id, $validate, $request);

                return redirect()->route('our-services.list')->with('success', 'Record has been updated successfully!');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $this->servicesRepository->delete($id);
    
            return response()->json([
                'message' => 'Service deleted successfully!',
                'redirect' => route('our-services.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
}
