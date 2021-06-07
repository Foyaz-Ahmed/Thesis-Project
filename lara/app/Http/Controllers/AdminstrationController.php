<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adminstration;

class AdminstrationController extends Controller
{
     public function recorder_profile(Request $requ){

     	$id = $requ->session()->get('name');
        $profiledata = Adminstration::find($id);

         
        return view('backened.profile.recorder_profile')->with('profiledata', $profiledata);
    
    }

    public function admin_profile(Request $requ){

     	$id = $requ->session()->get('name');
        $profiledata = Adminstration::find($id);

         
        return view('backened.profile.admin_profile')->with('profiledata', $profiledata);
    
    }
}
