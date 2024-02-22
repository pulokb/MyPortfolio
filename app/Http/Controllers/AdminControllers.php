<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function adminindex(){

        return view('Admin.adminindex');

    }
    public function home(){

        return view('Admin.home_view');

    }
    public function createhome(){

        return view('Admin.create_home');

    }
    public function adminabout(){

        return view('Admin.about_view');

    }
    public function createabout(){

        return view('Admin.create_about');

    }
    public function adminblog(){

        return view('Admin.blog_view');

    }
    public function createblog(){

        return view('Admin.create_blog');

    }
    public function adminportfolio(){

        return view('Admin.portfolio_view');

    }
    public function createportfolio(){

        return view('Admin.create_portfolio');

    }
    public function adminservice(){

        return view('Admin.service_view');

    }
    public function createservice(){

        return view('Admin.create_service');

    }
    public function admincontact(){

        return view('Admin.contact_view');

    }
    public function createcontact(){

        return view('Admin.create_contact');

    }
    public function profile(){

        return view('Admin.account');

    }
    public function userprofile(){

        return view('Admin.userprofile');

    }
    public function editprofile(){

        return view('Admin.editprofile');

    }
    public function general(){

        return view('Admin.create_contact');

    }
    public function email(){

        return view('Admin.create_contact');

    }
    public function languages(){

        return view('Admin.create_contact');

    }
    public function backup(){

        return view('Admin.create_contact');

    }
    public function roles(){

        return view('Admin.create_contact');

    }
    public function administration(){

        return view('Admin.create_contact');

    }
    public function mantenance(){

        return view('Admin.maintenance');

    }
    public function supportticket(){

        return view('Admin.support_ticket');

    }
    public function login(){

        return view('Admin.login');

    }
    public function signup(){

        return view('Admin.signup');

    }
    public function reset(){

        return view('Admin.resetpassword');

    }

}
