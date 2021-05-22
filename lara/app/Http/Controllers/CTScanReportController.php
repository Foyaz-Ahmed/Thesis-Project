<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CTscanReport;

class CTScanReportController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $ct_scan = CTscanReport::all()->where('id',$id);

        
        return view('backened.reports.ct_scan')->with('ct_scan',$ct_scan);


    }

    public function image(Request $requ, $date){
        $id = $requ->session()->get('name');
        $view = CTscanReport::all()->where('id',$id)
                                ->where('date',$date);
        // print_r($img);
        return view('backened.reports.ct_scan_image')->with('view',$view);
    }
}
