<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemoglobin;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HemoglobinController extends Controller
{
    public function hg(Request $requ){

        $id = $requ->session()->get('name');

        $hg = Hemoglobin::all()->where('id',$id);

        return view('backened.reports.hemoglobin')->with('hg',$hg);

    }

    public function hg_one(Request $requ){

        $id = $requ->session()->get('p_id');

        $hg = Hemoglobin::all()->where('id',$id);

        return view('backened.reports.hemoglobin')->with('hg',$hg);

    }

    public function all(){

    	$hg_all = Hemoglobin::all();

    	return view('backened.reports.hg_all_reports')->with('all', $hg_all);
    }


    public function hg_create(){

    	return view('backened.reports.hemoglobin_create');
    }

    public function hg_store(ReportRequest $requ){

    	$hg = new Hemoglobin();

    	$hg->id = $requ->id;
    	$hg->result_value = $requ->result_value;
    	$hg->reference_range = $requ->reference_value;
    	$hg->date = $requ->date;

    	$hg->save();
    	return redirect()->route('hemoglobin.reports.all');
    	
    }

    public function edit(Request $requ,  $id, $date){

        $hg = Hemoglobin::find($id)
                            ->where('date',$date)
                            ->get();

        return view('backened.reports.hg_reports_update')->with('hg',$hg);

    

        return view('backened.reports.hg_reports_update')->with('hg',$hg);
    }

    public function update(UpdateRequest $requ, $id, $date){

        Hemoglobin::where('id', $id)->where('date',$date)->update(['result_value' => $requ->result_value]);
        Hemoglobin::where('id', $id)->where('date',$date)->update(['date' => $requ->date]);
    	return redirect()->route('hemoglobin.reports.all');
    	
    }

    public function delete($id, $date)
    {
        Hemoglobin::where('id', $id)->where('date',$date)->delete();
       
        return redirect()->route('hemoglobin.reports.all');
        
        
    }




}
