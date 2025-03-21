<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function podcast(Request $request){
        return view('frontend.podcast');
       }
}
