<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platelets;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class PlateletsController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $pt = Platelets::all()->where('id',$id);

        return view('backened.reports.platelets')->with('pt',$pt);

    }

    public function all(){

        $platelets_all = Platelets::all();

        return view('backened.reports.platelets_all_reports')->with('all', $platelets_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $pt = Platelets::all()->where('id',$id);

        return view('backened.reports.platelets')->with('pt',$pt);

    }


    public function platelets_create(){

   
         return view('backened.reports.platelets_create');
    }

    public function platelets_store(ReportRequest $requ){

        $plt = new Platelets();

        $plt->id = $requ->id;
        $plt->result_value = $requ->result_value;
        $plt->reference_range = $requ->reference_value;
        $plt->date = $requ->date;

        $plt->save();
        return redirect()->route('platelets.reports.all');
        
    }

    public function edit(Request $requ,  $id, $date){

        $platelets = Platelets::find($id)
                            ->where('date',$date)
                            ->get();

        return view('backened.reports.platelets_reports_update')->with('platelets',$platelets);
    }

    public function update(UpdateRequest $requ, $id, $date){

        Platelets::where('id', $id)->where('date',$date)->update(['result_value' => $requ->result_value]);
        Platelets::where('id', $id)->where('date',$date)->update(['date' => $requ->date]);
        return redirect()->route('platelets.reports.all');
        
    }

    public function delete($id, $date)
    {
        Platelets::where('id', $id)->where('date',$date)->delete();
       
        return redirect()->route('platelets.reports.all');
        
        
    }
}
