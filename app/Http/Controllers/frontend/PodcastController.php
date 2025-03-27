<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function podcast(Request $request){
        $categories = Category::with('prodcasts')->where('category_type','podcast')->get();

        return view('frontend.podcast',compact('categories'));
       }
}
