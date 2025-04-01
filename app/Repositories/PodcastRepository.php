<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Podcast;
use App\Repositories\Interfaces\PodcastRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;
use Illuminate\Http\Request;

class PodcastRepository implements PodcastRepositoryInterface
{
    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAllPodcasts()
    {
        return Podcast::with('category')->orderBy('id', 'ASC')->get();
    }

    public function getPodcastById($id)
    {
        return Podcast::with('category')->findOrFail($id);
    }

    public function getCategoriesByType(string $type)
    {
        return Category::where('category_type', $type)->get();
    }

    public function createPodcast(array $data, Request $request)
    {
        $podcast = new Podcast();
        $podcast->category_id = $data['category_id'];
        $podcast->sub_category = $data['sub_category'];
        $podcast->slug = $data['slug'];
        $podcast->short_desc = $data['short_desc'];
        $podcast->description = $data['description'];
        $podcast->video_url = $data ['video_url'];

        if ($request->hasFile('image')) {
            $podcast->images = $this->uploadService->uploadImage($request, 'podcast');
        }

        $podcast->save();
        return $podcast;
    }

    public function updatePodcast($id, array $data, Request $request)
    {
        $podcast = Podcast::findOrFail($id);
        $podcast->category_id = $data['category_id'];
        $podcast->sub_category = $data['sub_category'];
        $podcast->slug = $data['slug'];
        $podcast->short_desc = $data['short_desc'];
        $podcast->description = $data['description'];
        $podcast->video_url = $data ['video_url'];

        if ($request->hasFile('image')) {
            // Delete old image before uploading a new one
            if (!empty($podcast->images)) {
                $this->uploadService->deleteImage($podcast->images, 'podcast');
            }
            $podcast->images = $this->uploadService->uploadImage($request, 'podcast');
        }

        $podcast->save();
        return $podcast;
    }

    public function deletePodcast($id)
    {
        $podcast = Podcast::findOrFail($id);

        if (!empty($podcast->images)) {
            $this->uploadService->deleteImage($podcast->images, 'podcast');
        }

        $podcast->delete();
        return true;
    }
}
