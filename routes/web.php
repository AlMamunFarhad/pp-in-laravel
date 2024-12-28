<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\PhpController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\DesignController;
use App\Http\Controllers\admin\LaravelController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JavascriptController;
use App\Http\Controllers\admin\AdminResumeController;
use App\Http\Controllers\admin\DescriptionController;
use App\Http\Controllers\admin\PortfolioController as AdminPortfolioController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/frontend/resume', [ResumeController::class, 'index'])->name('front.resume');
Route::get('/portfolio-all', [PortfolioController::class, 'portfolioAll'])->name('portfolio.all');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loggedIn'])->name('logged.in');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::resource('about', AboutController::class);
        Route::get('/portfolio/projects', [AdminPortfolioController::class, 'index'])->name('portfolio.index');
        Route::resource('/laravel', LaravelController::class)->except(['show']);
        Route::resource('/php', PhpController::class)->except(['index','show']);
        Route::resource('/js', JavascriptController::class)->except(['index','show']);
        Route::resource('/design', DesignController::class)->except(['index','show']);
        Route::resource('/resume', AdminResumeController::class)->except(['show']);
        Route::resource('/skills', SkillController::class)->except('show');
        Route::resource('/descriptions', DescriptionController::class)->except(['index','show']);
    });
});
