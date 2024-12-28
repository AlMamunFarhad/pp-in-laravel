<?php

namespace App\Http\Controllers\admin;

use App\Models\Php;
use App\Models\Design;
use App\Models\Laravel;
use App\Models\Javascript;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $laravels = Laravel::orderByDesc('id')->paginate(4);
        $phps = Php::orderByDesc('id')->paginate(4);
        $javascript = Javascript::orderByDesc('id')->paginate(4);
        $designs = Design::orderByDesc('id')->paginate(4);
        return view('admin.portfolios.index', compact('laravels', 'phps', 'javascript','designs'));
    }
}
