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

    Route::get('adminabout', [AdminControllers::class, 'adminabout'])->name('adminabout');
    Route::get('createabout', [AdminControllers::class, 'createabout'])->name('createabout');
    Route::post('adminabout', [AdminControllers::class, 'store_adminabout'])->name('store_adminabout');
    Route::get('adminabout/{id}/edit',[AdminControllers::class, 'adminaboutedit']);
    Route::put('adminabout/{id}/edit',[AdminControllers::class, 'adminaboutup']);
    Route::get('adminabout/{id}/delete',[AdminControllers::class, 'adminaboutdelete']);

    Route::get('home', [AdminControllers::class, 'home'])->name('home');
    Route::get('createhome', [AdminControllers::class, 'createhome'])->name('createhome');
    Route::post('home', [AdminControllers::class, 'store_home'])->name('store_home');
    Route::get('home/{id}/edit',[AdminControllers::class, 'homeedit']);
    Route::put('home/{id}/edit',[AdminControllers::class, 'homeupdate']);
    Route::get('home/{id}/delete',[AdminControllers::class, 'homedelete']);

    Route::get('homeinfo', [AdminControllers::class, 'homeinfo'])->name('homeinfo');

    Route::get('aboutinfo', [AdminControllers::class, 'aboutinfo'])->name('aboutinfo');

    Route::get('countdown', [AdminControllers::class, 'countdown'])->name('countdown');

    Route::get('experience', [AdminControllers::class, 'experience'])->name('experience');

    Route::get('testimonial', [AdminControllers::class, 'testimonial'])->name('testimonial');

    Route::get('recent', [AdminControllers::class, 'recent'])->name('recent');

    Route::get('adminblog', [AdminControllers::class, 'adminblog'])->name('adminblog');
    Route::get('createblog', [AdminControllers::class, 'createblog'])->name('createblog');

    Route::get('adminportfolio', [AdminControllers::class, 'adminportfolio'])->name('adminportfolio');
    Route::get('createportfolio', [AdminControllers::class, 'createportfolio'])->name('createportfolio');

    Route::get('adminservice', [AdminControllers::class, 'adminservice'])->name('adminservice');
    Route::get('createservice', [AdminControllers::class, 'createservice'])->name('createservice');

    Route::get('admincontact', [AdminControllers::class, 'admincontact'])->name('admincontact');
    Route::get('createcontact', [AdminControllers::class, 'createcontact'])->name('createcontact');

    Route::get('adminindex', [AdminControllers::class, 'adminindex'])->name('adminindex');

    Route::get('userprofile', [AdminControllers::class, 'userprofile'])->name('userprofile');
    Route::get('profile', [AdminControllers::class, 'profile'])->name('profile');
    Route::get('editprofile', [AdminControllers::class, 'editprofile'])->name('editprofile');
    Route::get('general', [AdminControllers::class, 'general'])->name('general');
    Route::get('email', [AdminControllers::class, 'email'])->name('email');
    Route::get('languages', [AdminControllers::class, 'languages'])->name('languages');
    Route::get('backup', [AdminControllers::class, 'backup'])->name('backup');
    Route::get('roles', [AdminControllers::class, 'roles'])->name('roles');
    Route::get('administration', [AdminControllers::class, 'administration'])->name('administration');
    Route::get('mantenance', [AdminControllers::class, 'mantenance'])->name('mantenance');
    Route::get('supportticket', [AdminControllers::class, 'supportticket'])->name('supportticket');



    Route::get('login', [AdminControllers::class, 'login'])->name('login');
    Route::get('signup', [AdminControllers::class, 'signup'])->name('signup');
    Route::get('logout', [AdminControllers::class, 'logout'])->name('logout');
    Route::get('reset', [AdminControllers::class, 'reset'])->name('reset');
