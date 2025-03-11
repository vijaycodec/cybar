<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class templateController extends Controller
{
    public function template1(){
        return view('frontend.template1');
    }

    public function template2(){
        return view('frontend.template2');
    }

    public function fraudDetection(){
        return view('frontend.fraud-detection');
    }

}
