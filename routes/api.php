<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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