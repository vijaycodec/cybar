<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\PodcastRepositoryInterface;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    protected $podcastRepository;

    public function __construct(PodcastRepositoryInterface $podcastRepository)
    {
        $this->podcastRepository = $podcastRepository;
    }

    public function index()
    {
        $podcasts = $this->podcastRepository->getAllPodcasts();
        
        return view('backend.podcast.index', compact('podcasts'));
    }

    public function getShortDescription($description)
    {
        $words = explode(' ', strip_tags($description));
        return count($words) > 19 ? implode(' ', array_slice($words, 0, 19)) . '...' : implode(' ', $words);
    }

    public function create()
    {
        $categories = $this->podcastRepository->getCategoriesByType('podcast');
        return view('backend.podcast.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id'   => 'required',
            'sub_category'  => 'required',
            'slug'          => 'required',
            'short_desc'    => 'required',
            'description'   => 'required',
            'video_url' => 'nullable',
        ]);

        try {
            $this->podcastRepository->createPodcast($validated, $request);
            return redirect()->route('podcast.list')->with('success', 'Podcast subscription added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $all_categories = $this->podcastRepository->getCategoriesByType('podcast');
        $podcast = $this->podcastRepository->getPodcastById($id);

        return view('backend.podcast.edit', compact('podcast', 'all_categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id'   => 'required',
            'sub_category'  => 'required',
            'slug'          => 'required',
            'short_desc'    => 'required',
            'description'   => 'required',
            'video_url' => 'nullable',
        ]);

        try {
            $this->podcastRepository->updatePodcast($id, $validated, $request);
            return redirect()->route('podcast.list')->with('success', 'Podcast updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->podcastRepository->deletePodcast($id);
            return response()->json([
                'message'  => 'Podcast deleted successfully!',
                'redirect' => route('podcast.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
}
