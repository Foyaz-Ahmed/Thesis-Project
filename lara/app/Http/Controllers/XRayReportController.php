<?php

namespace App\Http\Controllers;
use App\XrayReport;

use Illuminate\Http\Request;

class XRayReportController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $xray = XrayReport::all()->where('id',$id);

        
        return view('backened.reports.xray')->with('xray',$xray);


    }
    public function image(Request $requ, $date){
        $id = $requ->session()->get('name');
        $view = XrayReport::all()->where('id',$id)
                                ->where('date',$date);
        // print_r($img);
        return view('backened.reports.x_rayimage')->with('view',$view);
    }
}
