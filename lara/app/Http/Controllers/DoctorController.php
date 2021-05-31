<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function profile(){

        $id = session()->get('name');
        $profiledata = Doctor::find($id);
         
        return view('backened.profile.doctor_profile')->with('profiledata', $profiledata);
    
    }
}
