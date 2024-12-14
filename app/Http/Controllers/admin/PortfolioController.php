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
        $laravels = Laravel::paginate(4);
        $phps = Php::paginate(4);
        $javascript = Javascript::paginate(4);
        $designs = Design::paginate(4);
        return view('admin.portfolios.index', compact('laravels', 'phps', 'javascript','designs'));
    }
}
