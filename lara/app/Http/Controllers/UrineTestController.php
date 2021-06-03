<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrineTest;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class UrineTestController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $urine = UrineTest::all()->where('id',$id);

        return view('backened.reports.urine')->with('urine',$urine);

    }

    public function all(){

        $urine_all = UrineTest::all();

        return view('backened.reports.urine_all_reports')->with('all', $urine_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $urine = UrineTest::all()->where('id',$id);

        return view('backened.reports.urine')->with('urine',$urine);

    }


    public function urine_create(){

   
         return view('backened.reports.urine_create');
    }

    public function urine_store(ReportRequest $requ){

        $ur = new UrineTest();

        $ur->id = $requ->id;
        $ur->result_value = $requ->result_value;
        $ur->reference_range = $requ->reference_value;
        $ur->date = $requ->date;

        $ur->save();
        return redirect()->route('urine.reports.all');
        
    }

    public function edit(Request $requ,  $id, $date){

        $urine = UrineTest::find($id)
                            ->where('date',$date)
                            ->get();

        return view('backened.reports.urine_reports_update')->with('urine',$urine);

    }

    public function update(UpdateRequest $requ, $id, $date){

        UrineTest::where('id', $id)->where('date',$date)->update(['result_value' => $requ->result_value]);
        UrineTest::where('id', $id)->where('date',$date)->update(['date' => $requ->date]);
        return redirect()->route('urine.reports.all');
        
    }

    public function delete($id, $date)
    {
        UrineTest::where('id', $id)->where('date',$date)->delete();
       
        return redirect()->route('urine.reports.all');
        
        
    }


}
