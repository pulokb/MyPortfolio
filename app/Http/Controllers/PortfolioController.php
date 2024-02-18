<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        return view('User.index');

    }
    public function about(){

        return view('User.about');

    }
    public function blog(){

        return view('User.blog');

    }
    public function contact(){

        return view('User.contact');

    }
    public function protfolio(){

        return view('User.protfolio');

    }
    public function service(){

        return view('User.service');

    }
}
