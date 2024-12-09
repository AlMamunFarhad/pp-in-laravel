<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-all', [PortfolioController::class, 'portfolioAll'])->name('portfolio.all');
Route::get('/login', [LoginController::class, 'login'])->name('login');
