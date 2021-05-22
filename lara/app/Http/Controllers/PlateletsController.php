<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platelets;

class PlateletsController extends Controller
{
    public function index(Request $requ){

        $id = $requ->session()->get('name');

        $pt = Platelets::all()->where('id',$id);

        return view('backened.reports.platelets')->with('pt',$pt);

    }
}
