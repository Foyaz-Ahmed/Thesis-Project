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
    return view('frontend.pages.index');
});

//home

Route::get('/home/main','HomeController@front_home')->name('frontend.pages.index');

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
Route::get('/profile/doctor','DoctorController@profile')->name('profile.doctor.index');

//treatments

Route::get('/treatments/','TreatmentController@index')->name('dashboard.treatments');
Route::get('patients/treatments/{id}','TreatmentController@index_two')->name('verify.treatments');
// Route::get('treatments/details','TreatmentController@details')->name('treatment.details');
Route::get('treatments/verify','TreatmentController@verify')->name('treatment.verify');
Route::post('treatments/verify','TreatmentController@verify_patient');
// Route::post('treatments/verify/patients','TreatmentController@patients_check')->name('treatment.verify.patients');
Route::get('treatments/create','TreatmentController@create')->name('treatment.create');
Route::post('treatments/create','TreatmentController@store')->name('treatment.store');



//Patients Reports

Route::get('/reports','ReportController@index')->name('dashboard.reports');
Route::get('/hemoglobin/reports','HemoglobinController@hg')->name('hemoglobin.reports');
Route::get('/hemoglobin/reports/show','HemoglobinController@hg_one')->name('hemoglobin.reports.show');

Route::get('/creatinine/reports','CreatinineController@index')->name('creatinine.reports');
Route::get('/creatinine/reports/show','CreatinineController@show')->name('creatinine.reports.show');

Route::get('/cholesterol/reports','CholesterolController@index')->name('cholesterol.reports');
Route::get('/cholesterol/reports/show','CholesterolController@show')->name('cholesterol.reports.show');

Route::get('/platelets/reports','PlateletsController@index')->name('platelets.reports');
Route::get('/platelets/reports/show','PlateletsController@show')->name('platelets.reports.show');

Route::get('/bloodsugar/reports/show','BloodSugarController@show')->name('bloodsugar.reports.show');
Route::get('/bloodsugar/reports','BloodSugarController@index')->name('bloodsugar.reports');

Route::get('/urine/reports','UrineTestController@index')->name('urine.reports');
Route::get('/urine/reports/show','UrineTestController@show')->name('urine.reports.show');

//others Reports


//Xray
Route::get('/xray/reports','XRayReportController@index')->name('xray.reports');
Route::get('/xray/reports/show','XRayReportController@show')->name('xray.reports.show');

//ultrasonography

Route::get('/ultrasonography/reports','UltrasonographyController@index')->name('ultrasonography.reports');
Route::get('/ultrasonography/reports/show','UltrasonographyController@show')->name('ultrasonography.reports.show');

//ctscan

Route::get('/ct-scan/reports','CTScanReportController@index')->name('ct_scan.reports');
Route::get('/ct-scan/reports/show','CTScanReportController@show')->name('ct_scan.reports.show');

Route::get('/ecg/reports','ECGReportController@index')->name('ecg.reports');
Route::get('/ecg/reports/show','ECGReportController@show')->name('ecg.reports.show');

//all reports image show

Route::get('/xray/images/{date}','XRayReportController@image')->name('click.image');
Route::get('/xray/images/show/{date}','XRayReportController@image_show')->name('click.image.show');

Route::get('/ultrasonography/images/{date}','UltrasonographyController@image')->name('click.image.ultra');
Route::get('/ultrasonography/images/show/{date}','UltrasonographyController@image_show')->name('click.image.ultra.show');

Route::get('/ct_scan/images/{date}','CTScanReportController@image')->name('click.image.ct_scan');
Route::get('/ct_scan/images/show/{date}','CTScanReportController@image_show')->name('click.image.ct_scan.show');

Route::get('/ecg/images/{date}','ECGReportController@image')->name('click.image.ecg');
Route::get('/ecg/images/show/{date}','ECGReportController@image_show')->name('click.image.ecg.show');


//Add Blood Group reports


//Hg create, delete All Routes

Route::get('/reports/create','ReportController@create_reports')->name('reports.create');

Route::get('/hemoglobin/reports/create','HemoglobinController@hg_create')->name('hemoglobin.reports.create');
Route::post('/hemoglobin/reports/create','HemoglobinController@hg_store')->name('hemoglobin.reports.create');
Route::get('/hemoglobin/reports/all','HemoglobinController@all')->name('hemoglobin.reports.all');
Route::get('/hemoglobin/reports/edit/{id}/{date}','HemoglobinController@edit')->name('hemoglobin.reports.edit');
Route::post('/hemoglobin/reports/edit/{id}/{date}','HemoglobinController@update')->name('hemoglobin.reports.edit');
Route::get('/hemoglobin/reports/delete/{id}/{date}','HemoglobinController@delete')->name('hemoglobin.reports.delete');


//Creatinine create/update/delete


Route::get('/creatinine/reports/create','CreatinineController@creatinine_create')->name('creatinine.reports.create');
Route::post('/creatinine/reports/create','CreatinineController@creatinine_store')->name('creatinine.reports.create');
Route::get('/creatinine/reports/all','CreatinineController@all')->name('creatinine.reports.all');
Route::get('/creatinine/reports/edit/{id}/{date}','CreatinineController@edit')->name('creatinine.reports.edit');
Route::post('/creatinine/reports/edit/{id}/{date}','CreatinineController@update')->name('creatinine.reports.edit');
Route::get('/creatinine/reports/delete/{id}/{date}','CreatinineController@delete')->name('creatinine.reports.delete');




//cholesterol create/update/delete


Route::get('/cholesterol/reports/create','CholesterolController@cholesterol_create')->name('cholesterol.reports.create');
Route::post('/cholesterol/reports/create','CholesterolController@cholesterol_store')->name('cholesterol.reports.create');
Route::get('/cholesterol/reports/all','CholesterolController@all')->name('cholesterol.reports.all');
Route::get('/cholesterol/reports/edit/{id}/{date}','CholesterolController@edit')->name('cholesterol.reports.edit');
Route::post('/cholesterol/reports/edit/{id}/{date}','CholesterolController@update')->name('cholesterol.reports.edit');
Route::get('/cholesterol/reports/delete/{id}/{date}','CholesterolController@delete')->name('cholesterol.reports.delete');

//Plateletes create/update/delete

Route::get('/platelets/reports/create','PlateletsController@platelets_create')->name('platelets.reports.create');
Route::post('/platelets/reports/create','PlateletsController@platelets_store')->name('platelets.reports.create');
Route::get('/platelets/reports/all','PlateletsController@all')->name('platelets.reports.all');
Route::get('/platelets/reports/edit/{id}/{date}','PlateletsController@edit')->name('platelets.reports.edit');
Route::post('/platelets/reports/edit/{id}/{date}','PlateletsController@update')->name('platelets.reports.edit');
Route::get('/platelets/reports/delete/{id}/{date}','PlateletsController@delete')->name('platelets.reports.delete');


//Blood Sugar create/update/delete
Route::get('/bloodsugar/reports/create','BloodSugarController@bs_create')->name('bloodsugar.reports.create');
Route::post('/bloodsugar/reports/create','BloodSugarController@bs_store')->name('bloodsugar.reports.create');
Route::get('/bloodsugar/reports/all','BloodSugarController@all')->name('bloodsugar.reports.all');
Route::get('/bloodsugar/reports/edit/{id}/{date}','BloodSugarController@edit')->name('bloodsugar.reports.edit');
Route::post('/bloodsugar/reports/edit/{id}/{date}','BloodSugarController@update')->name('bloodsugar.reports.edit');
Route::get('/bloodsugar/reports/delete/{id}/{date}','BloodSugarController@delete')->name('bloodsugar.reports.delete');


//urine reports create/update/delete


Route::get('/urine/reports/create','UrineTestController@urine_create')->name('urine.reports.create');
Route::post('/urine/reports/create','UrineTestController@urine_store')->name('urine.reports.create');
Route::get('/urine/reports/all','UrineTestController@all')->name('urine.reports.all');
Route::get('/urine/reports/edit/{id}/{date}','UrineTestController@edit')->name('urine.reports.edit');
Route::post('/urine/reports/edit/{id}/{date}','UrineTestController@update')->name('urine.reports.edit');
Route::get('/urine/reports/delete/{id}/{date}','UrineTestController@delete')->name('urine.reports.delete');


//Add Other Reports and delete

Route::get('/xray/reports/create','XRayReportController@xray_create')->name('xray.reports.create');
Route::get('/xray/reports/all','XRayReportController@all')->name('xray.reports.all');

Route::get('/ultrasonography/reports/create','UltrasonographyController@ultra_create')->name('ultrasonography.reports.create');
Route::get('/ultrasonography/reports/all','UltrasonographyController@all')->name('ultrasonography.reports.all');


Route::get('/ct-scan/reports/create','CTScanReportController@ct_scan_create')->name('ct_scan.reports.create');
Route::get('/ct-scan/reports/all','CTScanReportController@all')->name('ct_scan.reports.all');

Route::get('/ecg/reports/create','ECGReportController@ecg_create')->name('ecg.reports.create');
Route::get('/ecg/reports/all','ECGReportController@all')->name('ecg.reports.all');


//pdf generates

Route::get('generate-pdf/{date}','PDFController@generatePDF')->name('treatment.pdf');
Route::get('generate-pdf/doctor/{date}','PDFController@generatePDF_dcotor')->name('treatment.doctor.pdf');

});


 


 


