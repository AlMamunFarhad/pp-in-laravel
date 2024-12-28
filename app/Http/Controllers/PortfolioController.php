<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Javascript;
use App\Models\Php;
use App\Models\Laravel;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('layouts.portfolio');
    }
    public function portfolioAll()
    {
        $laravel_projects = Laravel::where('status', 1)->orderByDesc('id')->get();
        $php_projects = Php::where('status', 1)->orderByDesc('id')->get();
        $js_projects = Javascript::where('status', 1)->orderByDesc('id')->get();
        $design_projects = Design::where('status', 1)->orderByDesc('id')->get();
        return view('layouts.portfolio_all', compact('laravel_projects','php_projects', 'js_projects','design_projects'));
    }
}
