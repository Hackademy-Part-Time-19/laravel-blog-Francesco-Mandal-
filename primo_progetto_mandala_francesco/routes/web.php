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
    return view('home', ["titolo"=> "HOMEPAGE"]);
});

Route::get('/articoli', function () {
    return view('articoli', ["articoli"=> "I miei articoli"]);
});

Route::get('/chi_sono', function () {
    return view('chi_sono', ["chi_sono"=> "Chi sono", "descrizione"=> "Qui ti spiego chi sono!"]);
});
