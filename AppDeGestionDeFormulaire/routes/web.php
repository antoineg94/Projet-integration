<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/login', function () {
    return view('Login.login');
});

Route::get('/formulaireTravail', function () {
    return Controller('FormulaireTravailsController@index');
});

Route::get('/formulaireSituationDangereuse', function () {
    return Controller('FormulaireSituationDangereusesController@index');
});

Route::get('/formulaireMecanique', function () {
    return Controller('FormulaireMecaniquesController@index');
});

Route::get('/formulaireAudit', function () {
    return Controller('FormulaireAuditsController@index');
});