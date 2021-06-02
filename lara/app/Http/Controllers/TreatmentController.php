<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Treatment;
use App\Doctor;
use App\Http\Requests\TreatmentRequest;
use Illuminate\Support\Facades\DB;
use PDF;
use VAlidator;

class TreatmentController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
         
        $treatment = Treatment::all()->where('p_id', $id);

        return view('backened.treatment.treatment')->with('treat', $treatment);
        
        }

        public function index_two(Request $requ,$id){
         
        $treatment = Treatment::all()->where('p_id', $id);

        return view('backened.treatment.treatment')->with('treat', $treatment);
        
        }


        public function verify(){


        	return view('backened.treatment.verify');
        }

         public function verify_patient(Request $requ){

            $id = $requ->id;
            $treatment = Treatment::all()->where('p_id', $id);

            $p_user = "";

            if($id!=null){

            if(count($treatment) > 0)
            {
                 $requ->session()->put('p_id', $requ->id);

                 $id = session()->get('p_id');

                  return view('backened.treatment.find_all')->with('id',$id);

            }
            else{

                 session()->flash('success','Wrong Id given!!');
                 return redirect()->route('treatment.verify');
            }

            }

            elseif($id==""){
                session()->flash('success','Null Submission!!');
                return redirect()->route('treatment.verify');
            }           

            else{
                echo "wrong User";
            }  
      
        }


        public function create(Request $requ){


            $id = session()->get('name');

            $d_user = Doctor::find($id);

            $requ->session()->put('d_name', $d_user['name']); 

            return view('backened.treatment.treatment_create')->with('d_user', $d_user);
        }

        public function store(TreatmentRequest $requ){

        $id = session()->get('p_id');
        

        $treatment = new Treatment();

        $treatment->d_name = $requ->d_name;
        $treatment->p_id = $requ->p_id;
        $treatment->medicine_details = $requ->m_details;
        $treatment->disease_details = $requ->d_details;
        $treatment->remarks = $requ->remarks;
        $treatment->date = $requ->date;
        $treatment->save();
  
        return redirect()->route('treatment.verify');    
        

 
       

        }

}









