<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function home(){

        return view('Admin.home_view');

    }
    public function createhome(){

        return view('Admin.create_home');

    }
    public function about(){

        return view('Admin.about_view');

    }
    public function createabout(){

        return view('Admin.create_about');

    }
    public function blog(){

        return view('Admin.blog_view');

    }
    public function createblog(){

        return view('Admin.create_blog');

    }
    public function portfolio(){

        return view('Admin.portfolio_view');

    }
    public function createportfolio(){

        return view('Admin.create_portfolio');

    }
    public function service(){

        return view('Admin.service_view');

    }
    public function createservice(){

        return view('Admin.create_service');

    }
    public function contact(){

        return view('Admin.contact_view');

    }
    public function createcontact(){

        return view('Admin.create_contact');

    }
}
