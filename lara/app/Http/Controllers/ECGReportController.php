<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ECGReports;
use App\Http\Requests\ReportUploadRequest;
use Validator;

class ECGReportController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $ecg = ECGReports::all()->where('id',$id);
        
        return view('backened.reports.ecg')->with('ecg',$ecg);


    }

    public function all(){

        $ecg_all = ECGReports::all();

        return view('backened.reports.ecg_reports_all')->with('all',$ecg_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');
        $ecg = ECGReports::all()->where('id',$id);
        
        return view('backened.reports.ecg')->with('ecg',$ecg);


    }


    public function ecg_create(){

        return view('backened.reports.ecg_create');
    }

    public function ecg_store(ReportUploadRequest $requ){


         if($requ->hasFile('myfile'))    
        {

            $file = $requ->file('myfile');
            $filename =  time().".".$file->getClientOriginalExtension();
            $file->move('images/ecg', $filename);


            $ecg = new ECGReports();


            $ecg->id = $requ->id;
            $ecg->image = $filename;
            $ecg->date = $requ->date;

            $ecg->save();

            session()->flash('success','New ECGreport has been added successfully!!');
            return redirect()->route('ecg.reports.all');

         }
       

        }

    public function image(Request $requ, $date){
        $id = $requ->session()->get('name');
        $view = ECGReports::all()->where('id',$id)
                                ->where('date',$date);
        return view('backened.reports.ecg_image')->with('view',$view);
    }

    public function image_show(Request $requ, $date){
        $id = $requ->session()->get('p_id');
        $view = ECGReports::all()->where('id',$id)
                                ->where('date',$date);
        return view('backened.reports.ecg_image')->with('view',$view);
    }

}
