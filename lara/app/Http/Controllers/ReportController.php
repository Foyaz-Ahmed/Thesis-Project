<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){

        return view('backened.reports.index');
    }

    public function create_reports(){

    	return view('backened.reports.create_reports');
    }
}
