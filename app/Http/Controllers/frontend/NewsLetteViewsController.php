<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsLetter;

class NewsLetteViewsController extends Controller
{
   public function newLetterView($slug)
   {

      // $resource = NewsLetter::with('category')->find($id);
      $resource = NewsLetter::with('category')->where('slug', $slug)->first();

      // dd($resource);
      // $trendings = Category::where('category_type', 'newsletter')->latest()->take(5)->get();
      $trendings = NewsLetter::with('category')->latest()->take(5)->get();


      if ($resource) {
         return view('frontend.newsletter-view', compact('resource', 'trendings','slug'));
      }
   }

   public function trendingNewsLetterView($id = null)
   {

      $resource = NewsLetter::with('category')->where('category_id', $id)->first();

      // Fetch all categories for trendings Resources
      $trendings = Category::where('category_type', 'newsletter')->latest()->take(5)->get();

      // Fetch the category
      $category = Category::findOrFail($id);

      if ($resource) {
         // Resource found, pass resource data to view
         return view('frontend.newsletter-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
      } else {
         return view('frontend.newsletter-view', ['trendings' => $trendings, 'category' => $category]);
      }
   }
}
