<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function training()
    {
        return view('frontend.training');
    }

    public function resources()
    {
        return view('frontend.resources');
    }
    public function resourceview()
    {
        return view('frontend.resources-view');
    }

    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogview()
    {
        return view('frontend.blog-view');
    }

    public function events()
    {
        return view('frontend.events');
    }
    public function eventsview()
    {
        return view('frontend.events-view');
    }
    
    public function testimonials()
    {
        return view('frontend.testimonials');
    }

    public function careers()
    {
        return view('frontend.careers');
    }
    
    public function contact()
    {
        return view('frontend.contact');
    }

    public function cninsight()
    {
        return view('frontend.cn-insight');
    }

    public function l3template()
    {
        return view('frontend.l3-template');
    }
   
}
    
