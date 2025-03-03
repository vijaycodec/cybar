<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CareerRepositoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;


class CareerController extends Controller
{
    protected $careerRepository;

    public function __construct(CareerRepositoryInterface $careerRepository)
    {
        $this->careerRepository = $careerRepository;
    }

    public function index()
    {
        $careers = $this->careerRepository->getAll();
        return view('backend.careers.index', compact('careers'));
    }

    public function create()
    {
        $categories = Category::where('category_type', 'careers')->get();
        return view('backend.careers.create' , compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'category_id' => 'required',
                'subcategory' => 'required',
                'location' => 'required',
                'educational_background' => 'required',
                'short_desc' => 'required',
                'description' => 'required',
                'image' => 'nullable'
            ]);
 
            $this->careerRepository->create($validated, $request);
 
            return redirect()->route('career.list')->with('success', 'Careers added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()])->withInput();
        }
    } 
    public function edit($id)
    {
        $career = $this->careerRepository->getById($id);
        return view('backend.careers.edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $this->careerRepository->update($id, $request->all());
        return redirect()->route('careers.index')->with('success', 'Career updated successfully!');
    }

    public function destroy($id)
    {
        $this->careerRepository->delete($id);
        return redirect()->route('careers.index')->with('success', 'Career deleted successfully!');
    }
}
