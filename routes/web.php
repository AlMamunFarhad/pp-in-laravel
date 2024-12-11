<?php

use App\Models\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\admin\DashboardController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-all', [PortfolioController::class, 'portfolioAll'])->name('portfolio.all');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loggedIn'])->name('logged.in');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth'], function () {
       Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
       Route::get('/about', [AboutController::class, 'index'])->name('index.about');
       Route::post('/about', [AboutController::class, 'store'])->name('create.about');
       Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('edit.about');
       Route::put('/about/{id}', [AboutController::class, 'update'])->name('update.about');
       Route::delete('/about/delete/{id}', [AboutController::class, 'destroy'])->name('destroy.about');
       Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});

// Route::get('/about', [AboutController::class, 'index'])->name('index.about');


