<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodSugar;

class BloodSugarController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $blood_sugar = BloodSugar::all()->where('id',$id);

        return view('backened.reports.blood_sugar')->with('blood_sugar',$blood_sugar);

    }

    public function show(Request $requ){

        $id = $requ->session()->get('p_id');

        $blood_sugar = BloodSugar::all()->where('id',$id);

        return view('backened.reports.blood_sugar')->with('blood_sugar',$blood_sugar);

    }
}
