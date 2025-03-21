<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsLetteViewsController extends Controller
{
   public function newLetterView(Request $request){
    return view('frontend.newsletter-view');
   }
}
