<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\MenuEvent;
use App\Repositories\Interfaces\MenuEventRepositoryInterface;
use Illuminate\Http\Request;


use App\Repositories\Interfaces\UploadServiceInterface;

class MenuEventRepository implements MenuEventRepositoryInterface
{

    protected $uploadService;

    public function __construct(UploadServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAllEvents()
    {
        return MenuEvent::with('category')->orderBy('id', 'ASC')->paginate(10);
    }

    public function getEventById($id)
    {
        return MenuEvent::with('category')->findOrFail($id);
    }

    public function getCategoriesByType(string $type)
    {
        return Category::where('category_type', $type)->get();
    }

    public function createEvent(array $data, Request $request)
    {
        $event = new MenuEvent();
        $event->category_id = $data['category_id'];
        $event->sub_category = $data['sub_category'];
        $event->short_desc = $data['short_desc'];
        $event->slug = $data['slug'];
        $event->description = $data['description'];
        $event->video_url = $data ['video_url'];

        if ($request->hasFile('image')) {
            
            $event->images = $this->uploadService->uploadImage($request, 'event');
        }

        $event->save();
        return $event;
    }

    public function updateEvent($id, array $data, $request)
    {
        $event = MenuEvent::findOrFail($id);
        $event->category_id = $data['category_id'];
        $event->sub_category = $data['sub_category'];
        $event->short_desc = $data['short_desc'];
        $event->slug = $data['slug'];
        $event->description = $data['description'];
        $event->video_url = $data ['video_url'];

        // Handle image update
        if ($request->hasFile('image')) {
            if ($event->images) {
                $this->uploadService->deleteImage($event->images,'event');
            }
            $event->images = $this->uploadService->uploadImage($request, 'event');
        }

        $event->save();
        return $event;
    }

    public function deleteEvent($id)
    {
        $event = MenuEvent::findOrFail($id);
    
        // Delete the existing image from storage (pass folder first, then file name)
        if ($event->images) {
            $this->uploadService->deleteImage($event->images,'event' );
        }
    
        $event->delete();
        return true;
    }
}