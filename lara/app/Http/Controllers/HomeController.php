<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class HomeController extends Controller
{
    
    
    public function index(Request $req){

        if($req->session()->has('name')){
            return redirect()->route('dashboard.index');
            } else{
               $req->session()->flash('msg','Invalid user log in first.....');
               echo "somthing wrong";
               
            }  


    }

    public function front_home(){

        return view('frontend.pages.index');
    }
    
    public function reports()
    {
        return view('backened.reports');
    }
    
    public function dashboard()
    {
        return view('backened.home');
    }
    public function profile(){
        $id = session()->get('name');
        $profiledata = Patient::find($id);
         
        return view('backened.profile.index')->with('profiledata', $profiledata);
    
    }

    
}
