<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\FormulairesTravailsController;
use App\Http\Controllers\FormulaireSituationDangereusesController;
use App\Http\Controllers\FormulaireAuditsController;
use App\Http\Controllers\FormulaireMecaniquesController;
use App\Http\Controllers\ConsulterProceduresController;
use App\http\Controllers\AdminsController;
use App\Mail\ContactMail;



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

Route::get('/',
[LoginsController::class, 'index'])->name('Logins.index');

Route::get('/login',
[LoginsController::class, 'login'])->name('Logins.login');

Route::get('/Accueil',
[MenusController::class, 'index'])->name('Menus.index')->middleware('auth');

Route::get('/pageAdmin',
[MenusController::class, 'pageAdmin'])->name('Menus.pageAdmin')->middleware('auth');


Route::get('/logout',
[LoginsController::class, 'logout'])->name('Logins.logout');




// Form index

Route::get('/formulaireTravail',
[FormulairesTravailsController::class, 'index'])->name('formulairesTravails.index')->middleware('auth');


Route::get('/formulaireSituationDangereuse',
[FormulaireSituationDangereusesController::class, 'index'])->name('formulaireSituationDangereuses.index')->middleware('auth');


Route::get('/formulaireAudit',
[FormulaireAuditsController::class, 'index'])->name('formulaireAudits.index')->middleware('auth');


Route::get('/formulaireMecanique',
[FormulaireMecaniquesController::class, 'index'])->name('formulaireMecaniques.index')->middleware('auth');




// Zoom
Route::get('/zoomFormulaire/{liste}/',
[MenusController::class, 'zoomFormulaire'])->name('formulaires.zoomFormulaire')->middleware('auth');

Route::get('/zoomMesFormulaire/{liste}/',
[MenusController::class, 'zoomMesFormulaire'])->name('formulaires.zoomMesFormulaire')->middleware('auth');


// Form store

Route::post('/formulaireTravail',
[FormulairesTravailsController::class, 'enregistrer'])->name('formulairesTravails.enregistrer')->middleware('auth');

Route::post('/formulaireSituationDangereuse',
[FormulaireSituationDangereusesController::class, 'enregistrer'])->name('formulaireSituationDangereuses.enregistrer')->middleware('auth');


Route::post('/formulaireAudit',
[FormulaireAuditsController::class, 'enregistrer'])->name('formulaireAudits.enregistrer')->middleware('auth');

Route::post('/formulaireMecanique',
[FormulaireMecaniquesController::class, 'enregistrer'])->name('formulaireMecaniques.enregistrer')->middleware('auth');



// Liste 

Route::get('/listeFormulaire',
[MenusController::class, 'listeFormulaire'])->name('Menus.listeFormulaire')->middleware('auth');

Route::get('/MesFormulaire',
[MenusController::class, 'ListeMesFormulaires'])->name('Menus.ListeMesFormulaires')->middleware('auth');

Route::get('/listeFormulaireA',
[AdminsController::class, 'listeFormulaire'])->name('Admins.listeFormulaire')->middleware('auth');


// Valider formulaire

Route::post('/valideFormulaire/{zoomForm1s}/',
[MenusController::class, 'validerFormulaire'])->name('Menus.validerFormulaire')->middleware('auth');

// Trier

Route::get('/trierFormulaire',
[MenusController::class, 'trierFormulaire'])->name('Menus.trierFormulaire')->middleware('auth');

Route::get('/trierFormulaireA',
[AdminsController::class, 'trierFormulaire'])->name('Admins.trierFormulaire')->middleware('auth');

Route::get('/trierMesFormulaire',
[MenusController::class, 'trierMesFormulaire'])->name('Menus.trierMesFormulaire')->middleware('auth');

// Procedures
Route::get('/procedures/gestion',
[ConsulterProceduresController::class,'index'])->name('consulterProcedures.index')->middleware('auth');

Route::get('/procedures/creation',
[ConsulterProceduresController::class,'create'])->name('consulterProcedures.create')->middleware('auth');

Route::post('/procedures',
[ConsulterProceduresController::class,'store'])->name('consulterProcedures.store')->middleware('auth');

// Trier procedure
Route::get('/listeProcedure',
[ConsulterProceduresController::class, 'listeProcedure'])->name('consulterProcedures.listeProcedure')->middleware('auth');

Route::get('/trierProcedure',
[ConsulterProceduresController::class, 'trierProcedure'])->name('consulterProcedures.trierProcedure')->middleware('auth');

//Delete procedure
Route::delete('/procedures/{id}',
[ConsulterProceduresController::class,'destroy'])->name('consulterProcedures.destroy');


// mail
Route::get('envoiCourriel', function () {
   
    $details = [
        'titre' => 'Vous avez reçu un nouveau formulaire d\'un employé',
        'body' => 'Connecté vous pour le consulter.'
    ];

    dd("Email is Sent.");
})->middleware('auth');
