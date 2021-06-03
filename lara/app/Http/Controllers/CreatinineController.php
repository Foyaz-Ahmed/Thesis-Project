<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creatinine;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class CreatinineController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $ct = Creatinine::all()->where('id',$id);

        return view('backened.reports.creatinine')->with('ct',$ct);

    }

    public function all(){

        $creatinine_all = Creatinine::all();

        return view('backened.reports.creatinine_all_reports')->with('all', $creatinine_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $urine = Creatinine::all()->where('id',$id);

        return view('backened.reports.urine')->with('urine',$urine);

    }

    public function creatinine_create(){

   
         return view('backened.reports.creatinine_create');
    }

    public function creatinine_store(ReportRequest $requ){

        $crt = new Creatinine();

        $crt->id = $requ->id;
        $crt->result_value = $requ->result_value;
        $crt->reference_range = $requ->reference_value;
        $crt->date = $requ->date;

        $crt->save();
        return redirect()->route('creatinine.reports.all');
        
    }

    public function edit(Request $requ,  $id, $date){

        $crt = Creatinine::find($id)
                            ->where('date',$date)
                            ->get();

        return view('backened.reports.creatinine_reports_update')->with('crt',$crt);
    }

    public function update(UpdateRequest $requ, $id, $date){

        Creatinine::where('id', $id)->where('date',$date)->update(['result_value' => $requ->result_value]);
        Creatinine::where('id', $id)->where('date',$date)->update(['date' => $requ->date]);
        return redirect()->route('creatinine.reports.all');
        
    }

    public function delete($id, $date)
    {
        Creatinine::where('id', $id)->where('date',$date)->delete();
       
        return redirect()->route('creatinine.reports.all');
        
        
    }

    
}
