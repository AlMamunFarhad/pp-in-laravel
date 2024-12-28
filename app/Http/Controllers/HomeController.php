<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\SkillContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $about_home = About::first();
        $skills = Skill::orderByDesc('id')->get();
        $description = SkillContent::first();
        return view('home', compact('about_home', 'skills', 'description'));
    }

}
