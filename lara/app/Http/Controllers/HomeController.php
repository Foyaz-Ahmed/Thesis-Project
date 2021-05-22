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
    
    public function reports()
    {
        return view('backened.reports');
    }
    
    public function dashboard()
    {
        return view('backened.home');
    }
    public function profile(){

        $profiledata = Patient::all();
         
        return view('backened.profile.index')->with('profiledata', $profiledata);
    
    }
}
