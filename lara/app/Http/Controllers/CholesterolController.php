<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cholesterol;

class CholesterolController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $chol = Cholesterol::all()->where('id',$id);

        return view('backened.reports.cholesterol')->with('chol',$chol);

    }
}
