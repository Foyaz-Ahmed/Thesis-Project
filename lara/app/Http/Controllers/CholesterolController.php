<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cholesterol;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class CholesterolController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $chol = Cholesterol::all()->where('id',$id);

        return view('backened.reports.cholesterol')->with('chol',$chol);

    }


    public function all(){

        $chol_all = Cholesterol::all();

        return view('backened.reports.cholesterol_all_reports')->with('all', $chol_all);
    }


    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $chol = Cholesterol::all()->where('id',$id);

        return view('backened.reports.cholesterol')->with('chol',$chol);

    }


    public function cholesterol_create(){

   
         return view('backened.reports.cholesterol_create');
    }

    public function cholesterol_store(ReportRequest $requ){

        $cl = new Cholesterol();

        $cl->id = $requ->id;
        $cl->result_value = $requ->result_value;
        $cl->reference_range = $requ->reference_value;
        $cl->date = $requ->date;

        $cl->save();
        return redirect()->route('cholesterol.reports.all');
        
    }



     public function edit(Request $requ,  $id, $date){

        $chol = Cholesterol::find($id)
                            ->where('date',$date)
                            ->get();

        return view('backened.reports.cholesterol_reports_update')->with('chol',$chol);
    }

    public function update(UpdateRequest $requ, $id, $date){

        Cholesterol::where('id', $id)->where('date',$date)->update(['result_value' => $requ->result_value]);
        Cholesterol::where('id', $id)->where('date',$date)->update(['date' => $requ->date]);
        return redirect()->route('cholesterol.reports.all');
        
    }

    public function delete($id, $date)
    {
        Cholesterol::where('id', $id)->where('date',$date)->delete();
       
        return redirect()->route('cholesterol.reports.all');
        
        
    }



}
