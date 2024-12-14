<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $about_home = About::first();
        return view('home', compact('about_home'));
    }

}
