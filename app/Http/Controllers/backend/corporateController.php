<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CorporateTrainingRepositoryInterface;

class CorporateController extends Controller
{
    protected $corporateTrainingRepository;

    public function __construct(CorporateTrainingRepositoryInterface $corporateTrainingRepository)
    {
        $this->corporateTrainingRepository = $corporateTrainingRepository;
    }

    public function index()
    {
        $corporate = $this->corporateTrainingRepository->getAll();
        return view('backend.corporate-training.index', compact('corporate'));
    }

    public function create($pageId)
    {
        $categories = $this->corporateTrainingRepository->getCategoriesByPageId($pageId);
        return view('backend.corporate-training.create', compact('categories'));
    }
    
    public function getSubCategories(Request $request)
    {
        $categories = $this->corporateTrainingRepository->getSubCategoriesByCategoryId($request->category_id);
        return response()->json($categories);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'description' => 'required',
        ]);

        try {
            $this->corporateTrainingRepository->create($request->all(), $request);
            return redirect()->route('corporate-training.list')->with('success', 'Record has been added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data = $this->corporateTrainingRepository->getCorporateTrainingWithCategories($id);
        $subCategories = $data['subCategories'];   
        $corporateTraining = $data['corporateTraining'];   
        $categories = $data['categories'];   
    
        return view('backend.corporate-training.edit', compact('subCategories', 'corporateTraining', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'description' => 'required',
        ]);

        try {
            $this->corporateTrainingRepository->update($id, $request->all(), $request);
            return redirect()->route('corporate-training.list')->with('success', 'Record has been updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        if ($this->corporateTrainingRepository->delete($id)) {
            return response()->json([
                'message' => 'Corporate Training deleted successfully!',
                'redirect' => route('corporate-training.list')
            ], 200);
        }
        return response()->json(['error' => 'Corporate Training not found!'], 404);
    }
}
