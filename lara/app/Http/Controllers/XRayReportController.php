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

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');
        $xray = XrayReport::all()->where('id',$id);

        
        return view('backened.reports.xray')->with('xray',$xray);

    }


    public function image(Request $requ, $date){
        $id = $requ->session()->get('name');
        $view = XrayReport::all()->where('id',$id)
                                ->where('date',$date);
        return view('backened.reports.x_rayimage')->with('view',$view);
    }

    public function image_show(Request $requ, $date){
        $id = $requ->session()->get('p_id');
        $view = XrayReport::all()->where('id',$id)
                                ->where('date',$date);
        return view('backened.reports.x_rayimage')->with('view',$view);
    }
}
