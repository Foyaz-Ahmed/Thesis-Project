<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemoglobin;

class HemoglobinController extends Controller
{
    public function hg(Request $requ){

        $id = $requ->session()->get('name');

        $hg = Hemoglobin::all()->where('id',$id);

        return view('backened.reports.hemoglobin')->with('hg',$hg);

    }
}
