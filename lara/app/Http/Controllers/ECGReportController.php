<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ECGReports;

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
