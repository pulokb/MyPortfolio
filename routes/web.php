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
    Route::get('createcontact', [PortfolioController::class, 'createcontact'])->name('createcontact');
    Route::post('contact', [PortfolioController::class, 'store_contact'])->name('store_contact');

    Route::get('contact/{id}/edit',[AdminControllers::class, 'contactedit']);
    Route::put('contact/{id}/edit',[AdminControllers::class, 'contactup']);
    Route::get('contact/{id}/delete',[AdminControllers::class, 'contactdelete']);

    Route::get('admincontact', [AdminControllers::class, 'admincontact'])->name('admincontact');
    Route::get('createcontact', [AdminControllers::class, 'createcontact'])->name('createcontact');
    Route::post('admincontact', [AdminControllers::class, 'store_admincontact'])->name('store_admincontact');


    Route::get('protfolio', [PortfolioController::class, 'protfolio'])->name('protfolio');

    Route::get('service', [PortfolioController::class, 'service'])->name('service');

    //Admin Routes

    Route::get('basicabout', [AdminControllers::class, 'basicabout'])->name('basicabout');
    Route::get('createbasicabout', [AdminControllers::class, 'createbasicabout'])->name('createbasicabout');
    Route::post('basicabout', [AdminControllers::class, 'store_basicabout'])->name('store_basicabout');
    Route::get('basicabout/{id}/edit',[AdminControllers::class, 'basicaboutedit']);
    Route::put('basicabout/{id}/edit',[AdminControllers::class, 'basicaboutup']);
    Route::get('basicabout/{id}/delete',[AdminControllers::class, 'basicaboutdelete']);

    Route::get('home', [AdminControllers::class, 'home'])->name('home');
    Route::get('createhome', [AdminControllers::class, 'createhome'])->name('createhome');
    Route::post('home', [AdminControllers::class, 'store_home'])->name('store_home');
    Route::get('home/{id}/edit',[AdminControllers::class, 'homeedit']);
    Route::put('home/{id}/edit',[AdminControllers::class, 'homeupdate']);
    Route::get('home/{id}/delete',[AdminControllers::class, 'homedelete']);

    Route::get('homeinfo', [AdminControllers::class, 'homeinfo'])->name('homeinfo');
    Route::get('createhomeinfo', [AdminControllers::class, 'createhomeinfo'])->name('createhomeinfo');
    Route::post('homeinfo', [AdminControllers::class, 'store_homeinfo'])->name('store_homeinfo');
    Route::get('homeinfo/{id}/edit',[AdminControllers::class, 'homeinfoedit']);
    Route::put('homeinfo/{id}/edit',[AdminControllers::class, 'homeinfoupdate']);
    Route::get('homeinfo/{id}/delete',[AdminControllers::class, 'homeinfodelete']);

    Route::get('aboutinfo', [AdminControllers::class, 'aboutinfo'])->name('aboutinfo');
    Route::get('createaboutinfo', [AdminControllers::class, 'createaboutinfo'])->name('createaboutinfo');
    Route::post('aboutinfo', [AdminControllers::class, 'store_aboutinfo'])->name('store_aboutinfo');
    Route::get('aboutinfo/{id}/edit',[AdminControllers::class, 'aboutinfoedit']);
    Route::put('aboutinfo/{id}/edit',[AdminControllers::class, 'aboutinfoupdate']);
    Route::get('aboutinfo/{id}/delete',[AdminControllers::class, 'aboutinfodelete']);

    Route::get('countdown', [AdminControllers::class, 'countdown'])->name('countdown');
    Route::get('createcountdown', [AdminControllers::class, 'createcountdown'])->name('createcountdown');
    Route::post('countdown', [AdminControllers::class, 'store_countdown'])->name('store_countdown');
    Route::get('countdown/{id}/edit',[AdminControllers::class, 'countdownedit']);
    Route::put('countdown/{id}/edit',[AdminControllers::class, 'countdownupdate']);
    Route::get('countdown/{id}/delete',[AdminControllers::class, 'countdowndelete']);

    Route::get('experience', [AdminControllers::class, 'experience'])->name('experience');
    Route::get('createexperience', [AdminControllers::class, 'createexperience'])->name('createexperience');
    Route::post('experience', [AdminControllers::class, 'store_experience'])->name('store_experience');
    Route::get('experience/{id}/edit',[AdminControllers::class, 'experienceedit']);
    Route::put('experience/{id}/edit',[AdminControllers::class, 'experienceupdate']);
    Route::get('experience/{id}/delete',[AdminControllers::class, 'experiencedelete']);

    Route::get('adminblog', [AdminControllers::class, 'adminblog'])->name('adminblog');
    Route::get('createblog', [AdminControllers::class, 'createblog'])->name('createblog');
    Route::post('adminblog', [AdminControllers::class, 'store_adminblog'])->name('store_adminblog');
    Route::get('adminblog/{id}/edit',[AdminControllers::class, 'adminblogedit']);
    Route::put('adminblog/{id}/edit',[AdminControllers::class, 'adminblogupdate']);
    Route::get('adminblog/{id}/delete',[AdminControllers::class, 'adminblogdelete']);

    Route::get('client', [AdminControllers::class, 'client'])->name('client');
    Route::get('createclient', [AdminControllers::class, 'createclient'])->name('createclient');
    Route::post('client', [AdminControllers::class, 'store_client'])->name('store_client');
    Route::get('client/{id}/edit',[AdminControllers::class, 'clientedit']);
    Route::put('client/{id}/edit',[AdminControllers::class, 'clientupdate']);
    Route::get('client/{id}/delete',[AdminControllers::class, 'clientdelete']);

    Route::get('testimonial', [AdminControllers::class, 'testimonial'])->name('testimonial');
    Route::get('createtestimonial', [AdminControllers::class, 'createtestimonial'])->name('createtestimonial');
    Route::post('testimonial', [AdminControllers::class, 'store_testimonial'])->name('store_testimonial');
    Route::get('testimonial/{id}/edit',[AdminControllers::class, 'testimonialedit']);
    Route::put('testimonial/{id}/edit',[AdminControllers::class, 'testimonialupdate']);
    Route::get('testimonial/{id}/delete',[AdminControllers::class, 'testimonialdelete']);

    Route::get('recent', [AdminControllers::class, 'recent'])->name('recent');
    Route::get('createrecent', [AdminControllers::class, 'createrecent'])->name('createrecent');
    Route::post('recent', [AdminControllers::class, 'store_recent'])->name('store_recent');
    Route::get('recent/{id}/edit',[AdminControllers::class, 'recentedit']);
    Route::put('recent/{id}/edit',[AdminControllers::class, 'recentupdate']);
    Route::get('recent/{id}/delete',[AdminControllers::class, 'recentelete']);

    Route::get('adminservice', [AdminControllers::class, 'adminservice'])->name('adminservice');
    Route::get('createservice', [AdminControllers::class, 'createservice'])->name('createservice');
    Route::post('adminservice', [AdminControllers::class, 'store_adminservice'])->name('store_adminservice');
    Route::get('adminservice/{id}/edit',[AdminControllers::class, 'adminserviceedit']);
    Route::put('adminservice/{id}/edit',[AdminControllers::class, 'adminserviceupdate']);
    Route::get('adminservice/{id}/delete',[AdminControllers::class, 'adminservicedelete']);



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
    Route::get('activity', [AdminControllers::class, 'activity'])->name('activity');
    Route::get('visitor', [AdminControllers::class, 'visitor'])->name('visitor');
    Route::get('activity_log', [AdminControllers::class, 'activity_log'])->name('activity_log');



    Route::get('login', [AdminControllers::class, 'login'])->name('login');
    Route::get('signup', [AdminControllers::class, 'signup'])->name('signup');
    Route::get('logout', [AdminControllers::class, 'logout'])->name('logout');
    Route::get('reset', [AdminControllers::class, 'reset'])->name('reset');
