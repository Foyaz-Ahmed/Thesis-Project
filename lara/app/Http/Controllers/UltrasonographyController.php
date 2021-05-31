<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ultrasonography;

class UltrasonographyController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');
        $ultra = Ultrasonography::all()->where('id',$id);

        
        return view('backened.reports.ultrasonography')->with('ultra',$ultra);

    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');
        $ultra = Ultrasonography::all()->where('id',$id);

        
        return view('backened.reports.ultrasonography')->with('ultra',$ultra);

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
}
