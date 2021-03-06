<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Treatment;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $requ,  $date)
    {   

        $id = $requ->session()->get('name');

        $treatment = Treatment::where('id', $id)
                             ->where('date',$date)
                             ->select('d_name','disease_details', 'medicine_details', 'remarks','date','p_name','age')
                            ->join('patients', 'patients.id', '=', 'treatments.p_id')
                            ->get();
            
        view()->share('treat',$treatment);
        $pdf = PDF::loadView('backened/treatment/treatmentpdf', $treatment);

        return $pdf->download('prescription.pdf');
    }

    public function generatePDF_dcotor(Request $requ,  $date)
    {   

        $p_id = session()->get('p_id');

        $treatment = Treatment::where('id', $p_id)
                             ->where('date',$date)
                             ->select('d_name','disease_details', 'medicine_details', 'remarks','date','p_name','age')
                            ->join('patients', 'patients.id', '=', 'treatments.p_id')
                            ->get();

       
            
        view()->share('treat',$treatment);
        $pdf = PDF::loadView('backened/treatment/treatmentTestpdf', $treatment);

        return $pdf->download('prescription.pdf');
    }
}