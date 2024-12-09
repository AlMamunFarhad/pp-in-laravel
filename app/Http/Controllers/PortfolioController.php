<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('layouts.portfolio');
    }
    public function portfolioAll()
    {
        return view('layouts.portfolio_all');
    }
}
