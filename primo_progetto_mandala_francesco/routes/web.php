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
    return view('home', ["titolo"=> "Il blog di Francesco"]);
})->name("home");

Route::get('/articoli', function () {

    $articoli = [["titolo"=>"Cappotto","categoria"=> "Inverno", "descrizione"=>"Cappotto 100% lana!"],
        ["titolo"=>"Maglione","categoria"=> "Inverno", "descrizione"=>"Maglione 100% lana!"],
        ["titolo"=>"T-shirt","categoria"=> "Estate", "descrizione"=>"T-shirt vari modelli!"],
        ["titolo"=>"Shorts","categoria"=> "Estate", "descrizione"=>"Shorts in jeans o cotone!"],
        ["titolo"=>"Sciarpa","categoria"=> "Inverno", "descrizione"=>"Sciarpa 100% lana!"],
        ["titolo"=>"Baseball Cap","categoria"=> "Estate", "descrizione"=>"Cappellino in stile baseball!"]
];

    return view('articoli', ["articoli" => $articoli ,"articoli_title"=> "I miei articoli"]);
})->name("articoli");

Route::get('/articoli/{id}', function ($id) {

    $articoli = [0=>["titolo"=>"Cappotto","categoria"=> "Inverno", "descrizione"=>"Cappotto 100% lana!"],
    1=>["titolo"=>"Maglione","categoria"=> "Inverno", "descrizione"=>"Maglione 100% lana!"],
    2=>["titolo"=>"T-shirt","categoria"=> "Estate", "descrizione"=>"T-shirt vari modelli!"],
    3=>["titolo"=>"Shorts","categoria"=> "Estate", "descrizione"=>"Shorts in jeans o cotone!"],
    4=>["titolo"=>"Sciarpa","categoria"=> "Inverno", "descrizione"=>"Sciarpa 100% lana!"],
    5=>["titolo"=>"Baseball Cap","categoria"=> "Estate", "descrizione"=>"Cappellino in stile baseball!"]
];

    return view('dettaglio', ["articolo"=> $articoli[$id]]);
})->name("articoli.dettaglio");

Route::get('/chi_sono', function () {
    return view('chi_sono', ["chi_sono"=> "Chi sono", "descrizione"=> "Qui ti spiego chi sono!"]);
})->name("chi_sono");
