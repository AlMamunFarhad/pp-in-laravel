<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\PhpController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\DesignController;
use App\Http\Controllers\admin\LaravelController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JavascriptController;
use App\Http\Controllers\admin\AdminResumeController;
use App\Http\Controllers\admin\PortfolioController as AdminPortfolioController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/frontend/resume', [ResumeController::class, 'index'])->name('front.resume');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-all', [PortfolioController::class, 'portfolioAll'])->name('portfolio.all');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loggedIn'])->name('logged.in');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        //*** about ***/
        Route::get('/about', [AboutController::class, 'index'])->name('index.about');
        Route::post('/create/about', [AboutController::class, 'store'])->name('create.about');
        Route::get('/edit/about/{id}', [AboutController::class, 'edit'])->name('edit.about');
        Route::put('/update/about/{id}', [AboutController::class, 'update'])->name('update.about');
        Route::delete('/delete/about/{id}', [AboutController::class, 'destroy'])->name('destroy.about');
        //*** Portfolio all ***/
        Route::get('/portfolio/projects', [AdminPortfolioController::class, 'index'])->name('portfolio.index');
        //*** Laravel ***/
        Route::get('/create/laravel', [LaravelController::class, 'create'])->name('create.laravel');
        Route::post('/store/laravel', [LaravelController::class, 'store'])->name('store.laravel');
        Route::get('/laravel/edit/{id}', [LaravelController::class, 'edit'])->name('edit.laravel');
        Route::put('/laravel/update/{id}', [LaravelController::class, 'update'])->name('update.laravel');
        Route::delete('/delete/laravel/{id}', [LaravelController::class, 'destroy'])->name('destroy.laravel');
        //*** PHP ***/
        Route::get('/create/php/project', [PhpController::class, 'create'])->name('create.php');
        Route::post('/store/php', [PhpController::class, 'store'])->name('store.php');
        Route::get('/edit/php/{id}', [PhpController::class, 'edit'])->name('edit.php');
        Route::put('/update/php/{id}', [PhpController::class, 'update'])->name('update.php');
        Route::delete('/delete/php/{id}', [PhpController::class, 'destroy'])->name('destroy.php');
        //*** Javascript ***/
        Route::get('/create/js/project', [JavascriptController::class, 'create'])->name('create.js');
        Route::post('/store/js', [JavascriptController::class, 'store'])->name('store.js');
        Route::get('/edit/js/{id}', [JavascriptController::class, 'edit'])->name('edit.js');
        Route::put('/update/js/{id}', [JavascriptController::class, 'update'])->name('update.js');
        Route::delete('/delete/js/{id}', [JavascriptController::class, 'destroy'])->name('destroy.js');
        //*** Design ***/
        Route::get('/create/design/project', [DesignController::class, 'create'])->name('create.design');
        Route::post('/store/design', [DesignController::class, 'store'])->name('store.design');
        Route::get('/edit/design/{id}', [DesignController::class, 'edit'])->name('edit.design');
        Route::put('/update/design/{id}', [DesignController::class, 'update'])->name('update.design');
        Route::delete('/delete/design/{id}', [DesignController::class, 'destroy'])->name('destroy.design');
        //*** Resume ***/
        Route::get('/resume', [AdminResumeController::class, 'index'])->name('admin.resume');
        Route::get('/create/resume', [AdminResumeController::class, 'create'])->name('create.resume');
        Route::post('/store/resume', [AdminResumeController::class, 'store'])->name('store.resume');
        Route::get('/edit/resume/{id}', [AdminResumeController::class, 'edit'])->name('edit.resume');
        Route::put('/update/resume/{id}', [AdminResumeController::class, 'update'])->name('update.resume');
        Route::delete('/delete/resume/{id}', [AdminResumeController::class, 'destroy'])->name('destroy.resume');
     
    });
});


