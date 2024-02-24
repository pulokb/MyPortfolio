<?php

namespace App\Http\Controllers;

use App\Models\Aboutinfos;
use App\Models\Abouts;
use App\Models\Blogs;
use App\Models\Clients;
use App\Models\Contacts;
use App\Models\Countdowns;
use App\Models\Experiences;
use App\Models\Recents;
use App\Models\Services;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        return view('User.index');

    }
    public function about(){
        $basicabouts = Abouts::get();
        $aboutinfos = Aboutinfos::get();
        $countdowns = Countdowns::get();
        $experiences = Experiences::get();
        return view('User.about', ['basicabouts' => $basicabouts, 'aboutinfos' => $aboutinfos, 'countdowns' => $countdowns, 'experiences' => $experiences]);

    }
    public function blog(){
        $blogs = Blogs::get();
        return view('User.blog', ['blogs' => $blogs]);

    }
    public function contact(){
        $contacts = Contacts::get();
        return view('User.contact', ['contacts' => $contacts]);
    }
    public function createcontact(){
        return view('User.contact');
    }
    public function store_contact(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'details' => 'required|string',
        ]);
        Contacts::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'details'=> $request->details,
        ]);
        return redirect('contact')->with('status','Successfully Created');
    }

    public function protfolio(){
        $testimonials = Testimonials::get();
        $recents = Recents::get();
        $clients = Clients::get();

        return view('User.protfolio', ['testimonials' => $testimonials, 'recents' => $recents, 'clients' => $clients]);


    }
    public function service(){

        $services = Services::get();
        return view('User.service', ['services' => $services]);

    }
}
