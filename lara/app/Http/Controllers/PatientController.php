<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    public function index(){

    	$pt = Patient::all();

    	return view('backened.patients.index')->with('pt', $pt);
    }

    public function create(){

    	return view('backened.patients.create');
    }

    public function store(PatientRequest $requ){

    	if($requ->hasFile('myfile'))    
        {

        $file = $requ->file('myfile');
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('images/profile_upload', $filename);
    	
    	$pt = new Patient();

    	$pt->id = $requ->id;
    	$pt->p_nid = $requ->p_nid;
    	$pt->p_name = $requ->p_name;
    	$pt->email = $requ->email;
    	$pt->password = $requ->password;
    	$pt->age = $requ->age;
    	$pt->phone = $requ->phone;
    	$pt->blood_group = $requ->blood_group;
    	$pt->gender = $requ->gender;
    	$pt->address = $requ->address;
    	$pt->p_image = $filename;
    	$pt->e_contact = $requ->e_contact;
    	$pt->dob = $requ->dob;


    	$pt->save();
  
    	return redirect()->route('patient.index');
     }else{
     	session()->flash('success', "Image has must be uploaded");
     	return redirect()->route('patient.index');
     }


    }

    public function edit($id){

    	$pt = Patient::find($id);
    	return view('backened.patients.edit')->with('pt',$pt);

    }

    public function update(PatientRequest $requ, $id){


    	$pt = Patient::find($id);
    	
    	$pt->id = $requ->id;
    	$pt->p_nid = $requ->p_nid;
    	$pt->p_name = $requ->p_name;
    	$pt->email = $requ->email;
    	$pt->password = $requ->password;
    	$pt->age = $requ->age;
    	$pt->phone = $requ->phone;
    	$pt->blood_group = $requ->blood_group;
    	$pt->gender = $requ->gender;
    	$pt->address = $requ->address;
    	// $pt->p_image = $filename;
    	$pt->e_contact = $requ->e_contact;
    	$pt->dob = $requ->dob;

    	$pt->save();

    	return redirect()->route('patient.index');
    }


}
