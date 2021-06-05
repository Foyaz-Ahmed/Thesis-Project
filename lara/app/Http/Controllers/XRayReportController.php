<?php

namespace App\Http\Controllers;
use App\XrayReport;

use Illuminate\Http\Request;
use App\Http\Requests\ReportUploadRequest;
use Validator;

class XRayReportController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $xray = XrayReport::all()->where('id',$id);

        
        return view('backened.reports.xray')->with('xray',$xray);


    }


    public function all(){

        $xray_all = XrayReport::all();

        return view('backened.reports.xray_all_reports')->with('all', $xray_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');
        $xray = XrayReport::all()->where('id',$id);

        
        return view('backened.reports.xray')->with('xray',$xray);

    }


    public function xray_create(){

        return view('backened.reports.xray_create');
    }

    public function xray_store(ReportUploadRequest $requ){


         if($requ->hasFile('myfile'))    
        {
            


            $file = $requ->file('myfile');
            $filename =  time().".".$file->getClientOriginalExtension();
            $file->move('images/x-ray', $filename);


            $xray = new XrayReport();


            $xray->id = $requ->id;
            $xray->image = $filename;
            $xray->date = $requ->date;

            $xray->save();

            session()->flash('success','New xray report has been added successfully!!');
            return redirect()->route('xray.reports.all');

         }
       

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
