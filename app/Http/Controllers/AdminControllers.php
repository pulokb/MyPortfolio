<?php

namespace App\Http\Controllers;

use App\Models\Aboutinfos;
use App\Models\Abouts;
use App\Models\Blogs;
use App\Models\Clients;
use App\Models\Contacts;
use App\Models\Countdowns;
use App\Models\Experiences;
use App\Models\Homeinfos;
use App\Models\Homes;
use App\Models\Recents;
use App\Models\Services;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function adminindex(){

        return view('Admin.adminindex');

    }

    public function home(){

        $homes = Homes::get();
        return view('Admin.home_view', ['homes' => $homes]);
    }

    public function createhome(){
        return view('Admin.create_home');
    }

    public function store_home(Request $request){
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'details' => 'required|string',
        ]);
        Homes::create([
            'name'=> $request->name,
            'title'=> $request->title,
            'details'=> $request->details,
        ]);
        return redirect('home')->with('status','Successfully Created');
    }

    public function homeedit (int $id){
        $homes = Homes::findOrFail($id);
        return view('Admin.homefedit',compact('homes'));
    }
    public function homeupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'details' => 'required|string',
        ]);
        Homes::findOrFail($id)->update([
            'name'=> $request->name,
            'title'=> $request->title,
            'details'=> $request->details,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function homedelete(int $id){
        $homes = Homes::findOrFail($id);
        $homes->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function homeinfo(){

        $homeinfos = Homeinfos::get();
        return view('Admin.homeinfo', ['homeinfos' => $homeinfos]);
    }
    public function createhomeinfo(){
        return view('Admin.create_homeinfo');
    }

    public function store_homeinfo(Request $request){
        $request->validate([
            'number' => 'required|string',
            'image' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
        ]);
        Homeinfos::create([
            'number'=> $request->number,
            'image'=> $request->image,
            'email'=> $request->email,
            'address'=> $request->address,
        ]);
        return redirect('homeinfo')->with('status','Successfully Created');
    }

    public function homeinfoedit (int $id){
        $homeinfos = Homeinfos::findOrFail($id);
        return view('Admin.homeinfoedit',compact('homeinfos'));
    }
    public function homeinfoupdate(Request $request, int $id){
        $request->validate([
            'number' => 'required|string',
            'image' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
        ]);
        Homeinfos::findOrFail($id)->update([
            'number'=> $request->number,
            'image'=> $request->image,
            'email'=> $request->email,
            'address'=> $request->address,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function homeinfodelete(int $id){
        $homeinfos = Homeinfos::findOrFail($id);
        $homeinfos->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function basicabout(){
        $basicabouts = Abouts::get();
        return view('Admin.about_view', ['basicabouts' => $basicabouts]);

    }
    public function createbasicabout(){

        return view('Admin.create_about');

    }
    public function store_basicabout(Request $request){
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'details' => 'required|string',
            'subdetails' => 'required|string',
        ]);
        Abouts::create([
            'name'=> $request->name,
            'designation'=> $request->designation,
            'details'=> $request->details,
            'subdetails'=> $request->subdetails,
        ]);
        return redirect('basicabout')->with('status','Successfully Created');
    }

    public function basicaboutedit (int $id){
        $basicabouts = Abouts::findOrFail($id);
        return view('Admin.basicabout_edit',compact('basicabouts'));
    }
    public function basicaboutup(Request $request, int $id){
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'details' => 'required|string',
            'subdetails' => 'required|string',
        ]);
        Abouts::findOrFail($id)->update([
            'name'=> $request->name,
            'designation'=> $request->designation,
            'details'=> $request->details,
            'subdetails'=> $request->subdetails,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function basicaboutdelete(int $id){
        $basicabouts = Abouts::findOrFail($id);
        $basicabouts->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function aboutinfo(){
        $aboutinfos = Aboutinfos::get();
        return view('Admin.aboutinfo', ['aboutinfos' => $aboutinfos]);

    }
    public function createaboutinfo(){

        return view('Admin.create_aboutinfo');

    }
    public function store_aboutinfo(Request $request){
        $request->validate([
            'age' => 'required|string',
            'born' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
        ]);
        Aboutinfos::create([
            'age'=> $request->age,
            'born'=> $request->born,
            'email'=> $request->email,
            'phone'=> $request->phone,
        ]);
        return redirect('aboutinfo')->with('status','Successfully Created');
    }

    public function aboutinfoedit (int $id){
        $aboutinfos = Aboutinfos::findOrFail($id);
        return view('Admin.aboutinfo_edit',compact('aboutinfos'));
    }
    public function aboutinfoupdate(Request $request, int $id){
        $request->validate([
            'age' => 'required|string',
            'born' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
        ]);
        Aboutinfos::findOrFail($id)->update([
            'age'=> $request->age,
            'born'=> $request->born,
            'email'=> $request->email,
            'phone'=> $request->phone,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function aboutinfodelete(int $id){
        $aboutinfos = Aboutinfos::findOrFail($id);
        $aboutinfos->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }


    public function countdown(){
        $countdowns = Countdowns::get();
        return view('Admin.countdown', ['countdowns' => $countdowns]);

    }
    public function createcountdown(){

        return view('Admin.create_countdown');

    }
    public function store_countdown(Request $request){
        $request->validate([
            'experience' => 'required|string',
            'projects' => 'required|string',
            'clients' => 'required|string',
        ]);
        Countdowns::create([
            'experience'=> $request->experience,
            'projects'=> $request->projects,
            'clients'=> $request->clients,
        ]);
        return redirect('countdown')->with('status','Successfully Created');
    }

    public function countdownedit (int $id){
        $countdowns = Countdowns::findOrFail($id);
        return view('Admin.countdown_edit',compact('countdowns'));
    }
    public function countdownupdate(Request $request, int $id){
        $request->validate([
            'experience' => 'required|string',
            'projects' => 'required|string',
            'clients' => 'required|string',
        ]);
        Countdowns::findOrFail($id)->update([
            'experience'=> $request->experience,
            'projects'=> $request->projects,
            'clients'=> $request->clients,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function countdowndelete(int $id){
        $countdowns = Countdowns::findOrFail($id);
        $countdowns->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }


    public function experience(){
        $experiences = Experiences::get();
        return view('Admin.experience', ['experiences' => $experiences]);

    }
    public function createexperience(){

        return view('Admin.create_experience');

    }
    public function store_experience(Request $request){
        $request->validate([
            'start_date' => 'required|string',
            'ends_on' => 'required|string',
            'company' => 'required|string',
            'title' => 'required|string',
            'details' => 'required|string',
            'image' => 'required|string',
        ]);
        Experiences::create([
            'start_date'=> $request->start_date,
            'ends_on'=> $request->ends_on,
            'company'=> $request->company,
            'title'=> $request->title,
            'details'=> $request->details,
            'image'=> $request->image,
        ]);
        return redirect('experience')->with('status','Successfully Created');
    }

    public function experienceedit (int $id){
        $experiences = Experiences::findOrFail($id);
        return view('Admin.experience_edit',compact('experiences'));
    }
    public function experienceupdate(Request $request, int $id){
        $request->validate([
            'start_date' => 'required|string',
            'ends_on' => 'required|string',
            'company' => 'required|string',
            'title' => 'required|string',
            'details' => 'required|string',
            'image' => 'required|string',
        ]);
        Experiences::findOrFail($id)->update([
            'start_date'=> $request->start_date,
            'ends_on'=> $request->ends_on,
            'company'=> $request->company,
            'title'=> $request->title,
            'details'=> $request->details,
            'image'=> $request->image,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function experiencedelete(int $id){
        $experiences = Experiences::findOrFail($id);
        $experiences->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function client(){
        $clients = Clients::get();
        return view('Admin.portfolio_view', ['clients' => $clients]);

    }
    public function createclient(){

        return view('Admin.create_portfolio');

    }
    public function store_client(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
        ]);
        Clients::create([
            'name'=> $request->name,
            'image'=> $request->image,
        ]);
        return redirect('client')->with('status','Successfully Created');
    }

    public function clientedit (int $id){
        $clients = Experiences::findOrFail($id);
        return view('Admin.experience_edit',compact('clients'));
    }
    public function clientupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
        ]);
        Clients::findOrFail($id)->update([
            'name'=> $request->name,
            'image'=> $request->image,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function clientdelete(int $id){
        $clients = Clients::findOrFail($id);
        $clients->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function testimonial(){
        $testimonials = Testimonials::get();
        return view('Admin.testimonial', ['testimonials' => $testimonials]);

    }
    public function createtestimonial(){

        return view('Admin.create_testimonial');

    }
    public function store_testimonial(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'details' => 'required|string',
        ]);
        Testimonials::create([
            'name'=> $request->name,
            'image'=> $request->image,
            'details'=> $request->details,
        ]);
        return redirect('testimonial')->with('status','Successfully Created');
    }

    public function testimonialedit (int $id){
        $testimonials = Testimonials::findOrFail($id);
        return view('Admin.testimonial_edit',compact('testimonials'));
    }
    public function testimonialupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'details' => 'required|string',
        ]);
        Testimonials::findOrFail($id)->update([
            'name'=> $request->name,
            'image'=> $request->image,
            'details'=> $request->details,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function testimonialdelete(int $id){
        $testimonials = Testimonials::findOrFail($id);
        $testimonials->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }


    public function recent(){
        $recents = Recents::get();
        return view('Admin.recent', ['recents' => $recents]);

    }
    public function createrecent(){

        return view('Admin.create_recent');

    }
    public function store_recent(Request $request){
        $request->validate([
            'image' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'description' => 'required|string',
        ]);
        Recents::create([
            'image'=> $request->image,
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'description'=> $request->description,
        ]);
        return redirect('recent')->with('status','Successfully Created');
    }

    public function recentedit (int $id){
        $recents = Recents::findOrFail($id);
        return view('Admin.recent_edit',compact('recents'));
    }
    public function recentupdate(Request $request, int $id){
        $request->validate([
            'image' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'description' => 'required|string',
        ]);
        Recents::findOrFail($id)->update([
            'image'=> $request->image,
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'description'=> $request->description,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function recentelete(int $id){
        $recents = Recents::findOrFail($id);
        $recents->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }



    public function adminblog(){
        $blogs = Blogs::get();
        return view('Admin.blog_view', ['blogs' => $blogs]);
    }
    public function createblog(){

        return view('Admin.create_blog');
    }

    public function store_adminblog(Request $request){
        $request->validate([
            'date' => 'required|string',
            'title' => 'required|string',
            'image' => 'required|string',
            'details' => 'required|string',
        ]);
        Blogs::create([
            'date'=> $request->date,
            'title'=> $request->title,
            'image'=> $request->image,
            'details'=> $request->details,
        ]);
        return redirect('adminblog')->with('status','Successfully Created');
    }

    public function adminblogedit (int $id){
        $blogs = Blogs::findOrFail($id);
        return view('Admin.blogedit',compact('blogs'));
    }
    public function adminblogupdate(Request $request, int $id){
        $request->validate([
            'date' => 'required|string',
            'title' => 'required|string',
            'image' => 'required|string',
            'details' => 'required|string',
        ]);
        Blogs::findOrFail($id)->update([
            'date'=> $request->date,
            'title'=> $request->title,
            'image'=> $request->image,
            'details'=> $request->details,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function adminblogdelete(int $id){
        $blogs = Blogs::findOrFail($id);
        $blogs->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }
    public function adminservice(){
        $services = Services::get();
        return view('Admin.service_view', ['services' => $services]);
    }
    public function createservice(){
        return view('Admin.create_service');
    }
    public function store_adminservice(Request $request){
        $request->validate([
            'image' => 'required|string',
            'title' => 'required|string',
            'details' => 'required|string',
        ]);
        Services::create([
            'image'=> $request->image,
            'title'=> $request->title,
            'details'=> $request->details,
        ]);
        return redirect('adminservice')->with('status','Successfully Created');
    }

    public function adminserviceedit (int $id){
        $services = Services::findOrFail($id);
        return view('Admin.serviceedit',compact('services'));
    }
    public function adminserviceupdate(Request $request, int $id){
        $request->validate([
            'image' => 'required|string',
            'title' => 'required|string',
            'details' => 'required|string',
        ]);
        Services::findOrFail($id)->update([
            'image'=> $request->image,
            'title'=> $request->title,
            'details'=> $request->details,
        ]);
        return redirect()->back()->with('status','Successfully Updated');
    }
    public function adminservicedelete(int $id){
        $services = Services::findOrFail($id);
        $services->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function admincontact(){
        $contacts = Contacts::get();
        return view('Admin.contact_view', ['contacts' => $contacts]);

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

        return view('Admin.general');

    }
    public function email(){

        return view('Admin.email');

    }
    public function languages(){

        return view('Admin.languages');

    }
    public function backup(){

        return view('Admin.backup');

    }
    public function roles(){

        return view('Admin.roles');

    }
    public function administration(){

        return view('Admin.administration');

    }
    public function mantenance(){

        return view('Admin.mantenance');

    }
    public function activity(){

        return view('Admin.activity');

    }
    public function visitor(){

        return view('Admin.visitor');

    }
    public function activity_log(){

        return view('Admin.activity_log');

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
