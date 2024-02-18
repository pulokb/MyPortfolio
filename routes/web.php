<?php

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

    Route::get('/', [PortfolioController::class, 'index'])->name('index');


    Route::get('about', [PortfolioController::class, 'about'])->name('about');
    Route::get('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::post('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::get('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::get('blog', [PortfolioController::class, 'blog'])->name('blog');
    Route::get('contact', [PortfolioController::class, 'contact'])->name('contact');
    Route::get('protfolio', [PortfolioController::class, 'protfolio'])->name('protfolio');
    Route::get('service', [PortfolioController::class, 'service'])->name('service');




