<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//login & logout

Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index')->name('logout');


Route::group(['middleware'=>('sess')], function(){

//dashboard

Route::get('/home','HomeController@index')->name('index');
Route::get('/dashboard/home','HomeController@dashboard')->name('dashboard.index');


//profile
Route::get('/profile','HomeController@profile')->name('profile.index');

//treatments

Route::get('/treatments','TreatmentController@index')->name('dashboard.treatments');
Route::get('treatments/details','TreatmentController@details')->name('treatment.details');
Route::get('treatments/verify','TreatmentController@verify')->name('treatment.verify');
Route::post('treatments/verify','TreatmentController@verify_doctor');
Route::get('treatments/create','TreatmentController@create')->name('treatment.create');
Route::post('treatments/create','TreatmentController@store')->name('treatment.store');


//Reports
Route::get('/reports','ReportController@index')->name('dashboard.reports');
Route::get('/hemoglobin/reports','HemoglobinController@hg')->name('hemoglobin.reports');
Route::get('/creatinine/reports','CreatinineController@index')->name('creatinine.reports');
Route::get('/cholesterol/reports','CholesterolController@index')->name('cholesterol.reports');
Route::get('/platelets/reports','PlateletsController@index')->name('platelets.reports');
Route::get('/bloodsugar/reports','BloodSugarController@index')->name('bloodsugar.reports');
Route::get('/urine/reports','UrineTestController@index')->name('urine.reports');

//others Reports
Route::get('/xray/reports','XRayReportController@index')->name('xray.reports');
Route::get('/ultrasonography/reports','UltrasonographyController@index')->name('ultrasonography.reports');
Route::get('/ct-scan/reports','CTScanReportController@index')->name('ct_scan.reports');
Route::get('/ecg/reports','ECGReportController@index')->name('ecg.reports');
Route::get('/xray/images/{date}','XRayReportController@image')->name('click.image');
Route::get('/ultrasonography/images/{date}','UltrasonographyController@image')->name('click.image.ultra');
Route::get('/ct_scan/images/{date}','CTScanReportController@image')->name('click.image.ct_scan');
Route::get('/ecg/images/{date}','ECGReportController@image')->name('click.image.ecg');

//pdf generates

Route::get('generate-pdf/{date}','PDFController@generatePDF')->name('treatment.pdf');



});


 


 


