<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrineTest;

class UrineTestController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $urine = UrineTest::all()->where('id',$id);

        return view('backened.reports.urine')->with('urine',$urine);

    }
}
