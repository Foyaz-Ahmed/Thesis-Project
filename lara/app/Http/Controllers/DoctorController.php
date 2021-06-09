<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    public function profile(){

        $id = session()->get('name');
        $profiledata = Doctor::find($id);
         
        return view('backened.profile.doctor_profile')->with('profiledata', $profiledata);
    
    }

    public function index(){

    	$dt = Doctor::all();

    	return view('backened.doctor.index')->with('dt', $dt);
    }

    public function create(){

    	return view('backened.doctor.create');
    }

    public function store(DoctorRequest $requ){

    	if($requ->hasFile('myfile'))    
        {

        $file = $requ->file('myfile');
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('images/profile_upload/doctor', $filename);
    	
    	$dt = new Doctor();

    	$dt->id = $requ->id;
    	$dt->d_nid = $requ->d_nid;
    	$dt->d_name = $requ->d_name;
    	$dt->email = $requ->email;
    	$dt->password = $requ->password;
    	$dt->d_age = $requ->age;
    	$dt->phone = $requ->phone;
    	$dt->blood_group = $requ->blood_group;
    	$dt->gender = $requ->gender;
    	$dt->address = $requ->address;
    	$dt->status = $requ->status;
    	$dt->duty_time = $requ->duty_time;
    	$dt->qualification = $requ->qualification;
    	$dt->d_image = $filename;
    	$dt->dob = $requ->dob;
    	
    	$dt->save();
    	session()->flash('success', "Doctor Added Successfully");
    	return redirect()->route('doctor.index');
     }else{
     	session()->flash('success', "Image has must be uploaded");
     	return redirect()->route('doctor.index');
     }


    }

    public function edit($id){

    	$dc = Doctor::find($id);

    	return view('backened.doctor.edit')->with('dc',$dc);

    }

    public function update(DoctorRequest $requ, $id){


    	$dt = Doctor::find($id);
    	
    	$dt->id = $requ->id;
    	$dt->d_nid = $requ->d_nid;
    	$dt->d_name = $requ->d_name;
    	$dt->email = $requ->email;
    	$dt->password = $requ->password;
    	$dt->d_age = $requ->age;
    	$dt->phone = $requ->phone;
    	$dt->blood_group = $requ->blood_group;
    	$dt->gender = $requ->gender;
    	$dt->address = $requ->address;
    	$dt->status = $requ->status;
    	$dt->duty_time = $requ->duty_time;
    	$dt->qualification = $requ->qualification;
    	$dt->dob = $requ->dob;

    	$dt->save();

    	return redirect()->route('doctor.index');
    }

    public function destroy($id){

    	Doctor::destroy($id);

        session()->flash('success', 'Category has deleted successfully');
    	return redirect()->route('doctor.index');

    }
}
