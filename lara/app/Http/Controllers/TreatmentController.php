<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Treatment;
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
}









