<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulairesTravailsController;


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


Route::get('/formulaireTravail',
    [FormulairesTravailsController::class, 'index'])->name('formulairesTravails.index');

