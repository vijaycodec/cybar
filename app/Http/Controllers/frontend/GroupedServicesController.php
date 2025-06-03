<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupedServicesController extends Controller
{
    public function soc()
    {
        return view('frontend.soc');
    }

    public function vapt()
    {
        return view('frontend.vapt');
    }

    public function grc()
    {
        return view('frontend.grc');
    }
}
