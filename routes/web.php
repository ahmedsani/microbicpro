<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});
Route::get('/home', function () {
    return redirect('login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::resources([
    'anti_biogram_data_biotics' => 'AntiBiogramDataBioticController',
    'anti_biogram_data_pathogens' => 'AntiBiogramDataPathogenController',
    'anti_biotics' => 'AntiBioticController',
    'diseases' => 'DiseaseController',
    'dosages' => 'DosageController',
    'drug_informations' => 'DrugInformationController',
    'guidelines' => 'GuidelineController',
    'pathogens' => 'PathogenController',
    'precausions' => 'PrecausionController',
    'spectrums' => 'SpectrumController',
    'susceptibilities' => 'SusceptibilityController',
    'vaccines' => 'VaccineController',
]);

Route::get('test', 'Controller@test');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');