<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ResourceRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class BackendResourcesController extends Controller
{
    protected $resourceRepository;

    public function __construct(ResourceRepositoryInterface $resourceRepository)
    {
        $this->resourceRepository = $resourceRepository;
    }

    public function index()
    {
        dd('ok');
        $resources = $this->resourceRepository->getAllResources();

        foreach ($resources as $resource) {
            $resource->short_description = $this->getShortDescription($resource->description);
        }

        return view('backend.resources.index', compact('resources'));
    }

    public function getShortDescription($description)
    {
        $words = explode(' ', strip_tags($description));
        return count($words) > 19 ? implode(' ', array_slice($words, 0, 19)) . '...' : implode(' ', $words);
    }

    public function create()
    {
        $categories = $this->resourceRepository->getCategoriesByType('resources');
        return view('backend.resources.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'slug' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
        
        ]);

        try {
            $this->resourceRepository->createResource($request->all(), $request);
            return redirect()->route('resources.list')->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $all_categories = $this->resourceRepository->getCategoriesByType('resources');
        $resources = $this->resourceRepository->getResourceById($id);
        return view('backend.resources.edit', compact('resources', 'all_categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'short_desc' => 'required|string',
            'slug' => 'required',
            'description' => 'required',
        ]);

        try {
            $this->resourceRepository->updateResource($id, $validated, $request);
            return response()->json(['message' => 'Resource updated successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $this->resourceRepository->deleteResource($id);
            return response()->json(['message' => 'Resource deleted successfully!', 'redirect' => route('resources.list')], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $resource = $this->resourceRepository->getResourceById($id);
        $category_name = $resource->category ? $resource->category->name : 'Uncategorized';

        return response()->json([
            'resource_name' => $category_name,
            'short_desc' => $resource->short_desc,
            'description' => $resource->description,
            'created_at' => $resource->created_at->format('d M, Y'),
        ]);
    }
}
