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
Route::get('/profile/recorder','AdminstrationController@recorder_profile')->name('profile.recorder.index');

//treatments

Route::get('/treatments','TreatmentController@index')->name('dashboard.treatments');
Route::get('treatments/details','TreatmentController@details')->name('treatment.details');
Route::get('treatments/verify','TreatmentController@verify')->name('treatment.verify');
Route::post('treatments/verify','TreatmentController@verify_doctor');
Route::get('treatments/create','TreatmentController@create')->name('treatment.create');
Route::post('treatments/create','TreatmentController@store')->name('treatment.store');


//Patients Reports


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


//Add Blood Group reports

Route::get('/reports/create','ReportController@create_reports')->name('reports.create');

Route::get('/hemoglobin/reports/create','HemoglobinController@hg_create')->name('hemoglobin.reports.create');
Route::post('/hemoglobin/reports/create','HemoglobinController@hg_store')->name('hemoglobin.reports.create');
Route::get('/hemoglobin/reports/all','HemoglobinController@all')->name('hemoglobin.reports.all');
Route::get('/hemoglobin/reports/edit/{id}','HemoglobinController@edit')->name('hemoglobin.reports.edit');
Route::post('/hemoglobin/reports/edit/{id}','HemoglobinController@update')->name('hemoglobin.reports.edit');


Route::get('/creatinine/reports/create','CreatinineController@creatinine_create')->name('creatinine.reports.create');
Route::get('/cholesterol/reports/create','CholesterolController@cholesterol_create')->name('cholesterol.reports.create');
Route::get('/platelets/reports/create','PlateletsController@platelets_create')->name('platelets.reports.create');
Route::get('/bloodsugar/reports/create','BloodSugarController@blood_sugar_create')->name('bloodsugar.reports.create');
Route::get('/urine/reports/create','UrineTestController@urine_create')->name('urine.reports.create');


//Add Other Reports

Route::get('/xray/reports/create','XRayReportController@xray_create')->name('xray.reports.create');
Route::get('/ultrasonography/reports/create','UltrasonographyController@ultra_create')->name('ultrasonography.reports.create');
Route::get('/ct-scan/reports/create','CTScanReportController@ct_scan_create')->name('ct_scan.reports.create');
Route::get('/ecg/reports/create','ECGReportController@ecg_create')->name('ecg.reports.create');


//pdf generates

Route::get('generate-pdf/{date}','PDFController@generatePDF')->name('treatment.pdf');



});


 


 


