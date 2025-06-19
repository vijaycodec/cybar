<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Courses_GradController extends Controller
{
    public function pgcac()
    {
        return view('frontend.pgcac');
    }
}
