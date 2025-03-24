<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\NewsLetterRepositoryInterface;

class NewsLetterController extends Controller
{
    protected $newsLetterRepository;

    public function __construct(NewsLetterRepositoryInterface $newsLetterRepository)
    {
        $this->newsLetterRepository = $newsLetterRepository;
    }

    public function index()
    {
        $newsletters = $this->newsLetterRepository->getAllNewsletters();
        return view('backend.newsletter.index', compact('newsletters'));
    }

    public function getShortDescription($description)
    {
        $words = explode(' ', strip_tags($description));
        return count($words) > 19 ? implode(' ', array_slice($words, 0, 19)) . '...' : implode(' ', $words);
    }

    public function create()
    {
        $categories = $this->newsLetterRepository->getCategoriesByType('newsletter');
        return view('backend.newsletter.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category' => 'required',
            'slug' => 'required',
            'short_desc'   => 'required',
            'description'  => 'required',
        ]);
        try {
            $this->newsLetterRepository->createNewsletter($validated, $request);
            return redirect()->route('newsletter.list')->with('success', 'Newsletter subscription added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        // Retrieve categories for blogs via the category repository.
       
        $all_categories = $this->newsLetterRepository->getCategoriesByType('newsletter');

        $newsletter = $this->newsLetterRepository->getNewsletterById($id);
        return view('backend.newsletter.edit', compact('newsletter', 'all_categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category' => 'required',
            'slug' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
        ]);

        try {
            $this->newsLetterRepository->updateNewsletter($id, $validated,  $request);
            return redirect()->route('newsletter.list')->with('success', 'Newsletter updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->newsLetterRepository->deleteNewsletter($id);
            return response()->json([
                'message' => 'Newsletter deleted successfully!',
                'redirect' => route('newsletter.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
}
