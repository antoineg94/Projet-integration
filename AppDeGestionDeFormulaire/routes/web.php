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

Route::get('/formulaire1', function () {
    return view('Formulaires.formulaire1');
});

Route::get('/formulaire2', function () {
    return view('Formulaires.formulaire2');
});

Route::get('/formulaire3', function () {
    return view('Formulaires.formulaire3');
});

Route::get('/formulaire4', function () {
    return view('Formulaires.formulaire4');
});