<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
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

    // public function contactedit (int $id){
    //     $services = Contacts::findOrFail($id);
    //     return view('Admin.contact_edit',compact('services'));
    // }
    // public function contactup(Request $request, int $id){
    //     $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string',
    //         'details' => 'required|string',
    //     ]);
    //     Contacts::findOrFail($id)->update([
    //         'name'=> $request->name,
    //         'email'=> $request->email,
    //         'details'=> $request->details,
    //     ]);
    //     return redirect()->back()->with('status','Successfully Updated');
    // }
    // public function contactdelete(int $id){
    //     $contacts = Contacts::findOrFail($id);
    //     $contacts->delete();
    //     return redirect()->back()->with('status','Successfully Deleted');
    // }
    public function protfolio(){

        return view('User.protfolio');

    }
    public function service(){

        return view('User.service');

    }
}
