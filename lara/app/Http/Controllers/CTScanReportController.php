<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CTscanReport;
use App\Http\Requests\ReportUploadRequest;
use Validator;

class CTScanReportController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $ct_scan = CTscanReport::all()->where('id',$id);

        
        return view('backened.reports.ct_scan')->with('ct_scan',$ct_scan);


    }


    public function all(){

        $ct_scan_all = CTscanReport::all();

        return view('backened.reports.ct_scan_all_reports')->with('all', $ct_scan_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');
        $ct_scan = CTscanReport::all()->where('id',$id);

        
        return view('backened.reports.ct_scan')->with('ct_scan',$ct_scan);


    }

    public function ct_scan_create(){

        return view('backened.reports.ct_scan_create');
    }

    public function ct_scan_store(ReportUploadRequest $requ){


         if($requ->hasFile('myfile'))    
        {

            $file = $requ->file('myfile');
            $filename =  time().".".$file->getClientOriginalExtension();
            $file->move('images/ct-scan', $filename);


            $ct_scan = new CTscanReport();


            $ct_scan->id = $requ->id;
            $ct_scan->image = $filename;
            $ct_scan->date = $requ->date;

            $ct_scan->save();

            session()->flash('success','New CT-scan report has been added successfully!!');
            return redirect()->route('ct_scan.reports.all');

         }
       

        }

    public function image(Request $requ, $date){
        $id = $requ->session()->get('name');
        $view = CTscanReport::all()->where('id',$id)
                                ->where('date',$date);
        
        return view('backened.reports.ct_scan_image')->with('view',$view);
    }

    public function image_show(Request $requ, $date){
        $id = $requ->session()->get('p_id');
        $view = CTscanReport::all()->where('id',$id)
                                ->where('date',$date);
        
        return view('backened.reports.ct_scan_image')->with('view',$view);
    }

    public function destroy($id, $date){  
      
        $data = CTscanReport::find($id)->where('date',$date)->first();
      
        
      if(file_exists('images/ct-scan/' .$data->image) AND !empty($data->image)){ 
            unlink('images/ct-scan/'.$data->image);
         } 
            try{

                CTscanReport::where('id', $id)->where('date',$date)->delete();
                $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            } 
            if($bug==0){
                session()->flash('success', "deleted successfull");
                 return redirect()->route('ct_scan.reports.all');
            }else{
                session()->flash('success', "error occured");
                 return redirect()->route('ct_scan.reports.all');
            }
        }
}
