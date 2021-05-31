<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creatinine;

class CreatinineController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $ct = Creatinine::all()->where('id',$id);

        return view('backened.reports.creatinine')->with('ct',$ct);

    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $urine = Creatinine::all()->where('id',$id);

        return view('backened.reports.urine')->with('urine',$urine);

    }

    
}
