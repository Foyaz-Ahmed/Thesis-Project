<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ultrasonography;
use App\Http\Requests\ReportUploadRequest;

class UltrasonographyController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $ultra = Ultrasonography::all()->where('id',$id);

        
        return view('backened.reports.ultrasonography')->with('ultra',$ultra);

    }

    public function all(){

        $ultra_all = Ultrasonography::all();

        return view('backened.reports.ultrasonography_reports_all')->with('all', $ultra_all);
    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');
        $ultra = Ultrasonography::all()->where('id',$id);

        
        return view('backened.reports.ultrasonography')->with('ultra',$ultra);

    }

    public function ultra_create(){

        return view('backened.reports.ultrasonography_create');
    }

    public function ultra_store(ReportUploadRequest $requ){


         if($requ->hasFile('myfile'))    
        {

            $file = $requ->file('myfile');
            $filename =  time().".".$file->getClientOriginalExtension();
            $file->move('images/ultrasonography', $filename);


            $ultra = new Ultrasonography();


            $ultra->id = $requ->id;
            $ultra->image = $filename;
            $ultra->date = $requ->date;

            $ultra->save();

            session()->flash('success','New xray report has been added successfully!!');
            return redirect()->route('ultrasonography.reports.all');

         }
       

        }


    public function image(Request $requ, $date){
        $id = $requ->session()->get('name');
        $view = Ultrasonography::all()->where('id',$id)
                                ->where('date',$date);
        return view('backened.reports.ultrasonography_image')->with('view',$view);
    }

    public function image_show(Request $requ, $date){
        $id = $requ->session()->get('p_id');
        $view = Ultrasonography::all()->where('id',$id)
                                ->where('date',$date);
        return view('backened.reports.ultrasonography_image')->with('view',$view);
    }

     public function destroy($id, $date){  
      
        $data = Ultrasonography::find($id)->where('date',$date)->first();
      
        
      if(file_exists('images/ultrasonography/' .$data->image) AND !empty($data->image)){ 
            unlink('images/ultrasonography/'.$data->image);
         } 
            try{

                Ultrasonography::where('id', $id)->where('date',$date)->delete();
                $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            } 
            if($bug==0){
                session()->flash('success', "deleted successfull");
                 return redirect()->route('ultrasonography.reports.all');
            }else{
                session()->flash('success', "error occured");
                 return redirect()->route('ultrasonography.reports.all');
            }
        }
}
