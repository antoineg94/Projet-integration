<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\FormulairesTravailsController;
use App\Http\Controllers\FormulaireSituationDangereusesController;
use App\Http\Controllers\FormulaireAuditsController;
use App\Http\Controllers\FormulaireMecaniquesController;


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
    return view('Login.login');
});

Route::post('/login',
[LoginsController::class, 'login'])->name('Logins.login');

Route::get('/Accueil',
[MenusController::class, 'index'])->name('Menus.index');


Route::get('/logout',
[LoginsController::class, 'logout'])->name('Logins.logout');

Route::get('/formulaireTravail',
[FormulairesTravailsController::class, 'index'])->name('formulairesTravails.index');

Route::get('/formulaireSituationDangereuse',
[FormulaireSituationDangereusesController::class, 'index'])->name('formulaireSituationDangereuses.index');

Route::get('/formulaireAudit',
[FormulaireAuditsController::class, 'index'])->name('formulaireAudits.index');

Route::get('/formulaireMecanique',
[FormulaireMecaniquesController::class, 'index'])->name('formulaireMecaniques.index');

Route::post('/formulaireTravail',
[FormulairesTravailsController::class, 'enregistrer'])->name('formulairesTravails.enregistrer');

Route::post('/formulaireSituationDangereuse',
[FormulaireSituationDangereusesController::class, 'enregistrer'])->name('formulaireSituationDangereuses.enregistrer');


Route::post('/formulaireAudit',
[FormulaireAuditsController::class, 'enregistrer'])->name('formulaireAudits.enregistrer');

Route::post('/formulaireMecanique',
[FormulaireMecaniquesController::class, 'enregistrer'])->name('formulaireMecaniques.enregistrer');


Route::get('/listeFormulaire',
[MenusController::class, 'listeFormulaire'])->name('Menus.listeFormulaire');