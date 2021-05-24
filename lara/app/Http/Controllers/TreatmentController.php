<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Treatment;
use App\Doctor;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
         
        $treatment = Treatment::all()->where('p_id', $id);

        return view('backened.treatment.treatment')->with('treat', $treatment);
        
        }

        public function details(){

                return view('backened.treatment.details');
            
            }

        public function create(){

        	return view('backened.treatment.treatment_create');
        }

        public function verify(){

        	return view('backened.treatment.verify');
        }

        public function verify_doctor(Request $requ){

        	$id = $requ->id;
			$d_user = Doctor::find($id)->all();

			if(count($d_user) > 0)
			{
				return view('backened.treatment.treatment_create')->with('d_user',$d_user);
			}  
      
        }


        public function store(Request $requ){

        $treatment = new Treatment();

        $treatment->d_name = $requ->d_name;
        $treatment->p_id = $requ->p_id;
        $treatment->medicine_details = $requ->m_details;
        $treatment->disease_details = $requ->d_details;
        $treatment->remarks = $requ->remarks;
        $treatment->date = $requ->date;    
        
        $treatment->save();

        return redirect()->route('dashboard.treatments');

        }

}









