<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemoglobin;
use App\Http\Requests\ReportRequest;
use Validator;

class HemoglobinController extends Controller
{
    public function hg(Request $requ){

        $id = $requ->session()->get('name');

        $hg = Hemoglobin::all()->where('id',$id);

        return view('backened.reports.hemoglobin')->with('hg',$hg);

    }

    public function all(){

    	$hg_all = Hemoglobin::all();

    	return view('backened.reports.hg_all_reports')->with('all', $hg_all);
    }

    public function edit(Request $requ,  $id){

    	$hg = Hemoglobin::find($id);

    	return view('backened.reports.hg_reports_update')->with('hg',$hg);
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

    public function update(ReportRequest $requ){

    	$hg = new Hemoglobin();

    	$hg->id = $requ->id;
    	$hg->result_value = $requ->result_value;
    	$hg->reference_range = $requ->reference_value;
    	$hg->date = $requ->date;

    	$hg->save();
    	return redirect()->route('hemoglobin.reports.all');
    	
    }


}
