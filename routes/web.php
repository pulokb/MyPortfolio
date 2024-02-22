<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    // Users Routes

    Route::get('/', [PortfolioController::class, 'index'])->name('index');
    Route::get('about', [PortfolioController::class, 'about'])->name('about');
    Route::get('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::post('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::get('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::get('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::get('contact', [PortfolioController::class, 'contact'])->name('contact');
    Route::get('protfolio', [PortfolioController::class, 'protfolio'])->name('protfolio');
    Route::get('service', [PortfolioController::class, 'service'])->name('service');

    //Admin Routes

    Route::get('about', [AdminControllers::class, 'about'])->name('about');
    Route::get('createabout', [AdminControllers::class, 'createabout'])->name('createabout');
    Route::get('home', [AdminControllers::class, 'home'])->name('home');
    Route::get('createhome', [AdminControllers::class, 'createhome'])->name('createhome');
    Route::get('blog', [AdminControllers::class, 'blog'])->name('blog');
    Route::get('createblog', [AdminControllers::class, 'createblog'])->name('createblog');
    Route::get('portfolio', [AdminControllers::class, 'portfolio'])->name('portfolio');
    Route::get('createportfolio', [AdminControllers::class, 'createportfolio'])->name('createportfolio');
    Route::get('service', [AdminControllers::class, 'service'])->name('service');
    Route::get('createservice', [AdminControllers::class, 'createservice'])->name('createservice');
    Route::get('contact', [AdminControllers::class, 'contact'])->name('contact');
    Route::get('createcontact', [AdminControllers::class, 'createcontact'])->name('createcontact');









