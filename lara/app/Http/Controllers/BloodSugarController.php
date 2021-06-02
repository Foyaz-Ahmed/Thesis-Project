<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodSugar;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class BloodSugarController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $blood_sugar = BloodSugar::all()->where('id',$id);

        return view('backened.reports.blood_sugar')->with('blood_sugar',$blood_sugar);

    }

    public function all(){

        $blood_sugar_all = BloodSugar::all();

        return view('backened.reports.blood_sugar_all_reports')->with('all', $blood_sugar_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $blood_sugar = BloodSugar::all()->where('id',$id);

        return view('backened.reports.blood_sugar')->with('blood_sugar',$blood_sugar);

    }


    public function edit(Request $requ,  $id, $date){

        $b_sugar = BloodSugar::find($id)
                            ->where('date',$date)
                            ->get();

        return view('backened.reports.blood_sugar_reports_update')->with('b_sugar',$b_sugar);
    }

    public function update(UpdateRequest $requ, $id, $date){

        BloodSugar::where('id', $id)->where('date',$date)->update(['result_value' => $requ->result_value]);
        BloodSugar::where('id', $id)->where('date',$date)->update(['date' => $requ->date]);
        return redirect()->route('bloodsugar.reports.all');
        
    }

    public function delete($id, $date)
    {
        BloodSugar::where('id', $id)->where('date',$date)->delete();
       
        return redirect()->route('bloodsugar.reports.all');
        
        
    }
}
